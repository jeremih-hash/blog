<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Google_Client;
use Google_Service_YouTube;
use App\Models\YoutubeVideo;
use Illuminate\Support\Facades\Http;
use OpenAI;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Parsedown;
use Illuminate\Support\Facades\Storage;

class FetchYoutubeVideos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'youtube:fetch-videos {--channel= : The channel ID to fetch from} {--process : Process videos into blog posts}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch recent videos from configured YouTube channels and optionally process them into blog posts';

    /**
     * Execute the console command.
     */
    /**
     * Generate an SEO-friendly image filename from the video title and description
     */
    private function generateSeoImageName(string $title, string $description): string
    {
        // Remove the date from the title
        $title = preg_replace('/~\s*Aug\s+\d+,?\s+\d{4}$/', '', $title);
        
        // Extract keywords from title and description
        $keywords = array_merge(
            array_filter(explode(' ', strtolower($title))),
            array_slice(array_filter(explode(' ', strtolower($description))), 0, 5)
        );
        
        // Remove common words and special characters
        $keywords = array_diff($keywords, ['the', 'a', 'an', 'and', 'or', 'but', 'in', 'on', 'at', 'to', 'for', 'of', 'with']);
        $keywords = array_map(function($word) {
            return preg_replace('/[^a-z0-9]/', '', $word);
        }, $keywords);
        
        // Take first 5-6 meaningful keywords
        $keywords = array_filter($keywords);
        $keywords = array_slice($keywords, 0, 6);
        
        // Add current date for uniqueness
        $keywords[] = date('Y-m-d');
        
        // Create filename
        return Str::slug(implode('-', $keywords));
    }

    private function getChannelIdFromHandle(Google_Service_YouTube $youtube, string $handle): ?string
    {
        try {
            $response = $youtube->channels->listChannels('id', [
                'forHandle' => str_replace('@', '', $handle)
            ]);

            if ($response->getItems()) {
                return $response->getItems()[0]->getId();
            }
        } catch (\Exception $e) {
            $this->error("Error getting channel ID: " . $e->getMessage());
        }
        return null;
    }

    public function handle()
    {
        // Initialize YouTube API client
        $client = new Google_Client();
        $client->setDeveloperKey(config('youtube.api_key'));
        $youtube = new Google_Service_YouTube($client);

        // Get channel ID from handle if not directly provided
        $channelId = $this->option('channel');
        if (!$channelId) {
            $handle = '@kenyacitizentv'; // Default handle
            $this->info("Getting channel ID for handle: {$handle}");
            $channelId = $this->getChannelIdFromHandle($youtube, $handle);
            if (!$channelId) {
                $this->error("Could not find channel ID for handle: {$handle}");
                return 1;
            }
            $this->info("Found channel ID: {$channelId}");
        }
        $shouldProcess = $this->option('process');

        $this->info("Fetching videos from channel: {$channelId}");

        try {
            // Get channel's recent videos
            $response = $youtube->search->listSearch('id,snippet', [
                'channelId' => $channelId,
                'order' => 'date',
                'maxResults' => config('youtube.channels.citizen_tv.max_results', 10),
                'type' => 'video'
            ]);

            $this->info("Found " . count($response->getItems()) . " videos");

            foreach ($response->getItems() as $item) {
                $videoId = $item->getId()->getVideoId();
                
                // Skip if we already have this video
                if (YoutubeVideo::where('video_id', $videoId)->exists()) {
                    $this->info("Video {$videoId} already exists, skipping...");
                    continue;
                }

                // Create video record
                $video = YoutubeVideo::create([
                    'video_id' => $videoId,
                    'title' => $item->getSnippet()->getTitle(),
                    'description' => $item->getSnippet()->getDescription(),
                    'thumbnail_url' => $item->getSnippet()->getThumbnails()->getHigh()->getUrl(),
                    'channel_id' => $channelId,
                    'channel_title' => $item->getSnippet()->getChannelTitle(),
                    'published_at' => Carbon::parse($item->getSnippet()->getPublishedAt()),
                ]);

                $this->info("Saved video: {$video->title}");

                if ($shouldProcess) {
                    $this->processVideo($video);
                }
            }

        } catch (\Exception $e) {
            $this->error("Error fetching videos: " . $e->getMessage());
            return 1;
        }

        return 0;
    }

    /**
     * Process a video into a blog post
     */
    private function processVideo(YoutubeVideo $video)
    {
        $this->info("Processing video: {$video->title}");

        try {
            // Get video captions/transcript
            $captions = $this->getCaptions($video->video_id);
            $video->update(['captions' => $captions]);

            // Generate blog post content using OpenAI
            $openai = \OpenAI::factory()
                ->withApiKey(config('youtube.openai.api_key'))
                ->make();
            
            $prompt = <<<EOT
You are a professional news editor at Citizen TV. Transform this video transcript into a well-structured news article following these EXACT formatting requirements:

REQUIRED STRUCTURE:
1. Main Headline (use exactly this format):
   ### [Write a compelling headline that captures the main news story]

2. Summary (use exactly this format):
   [Write a 2-3 sentence summary highlighting the key points and why they matter]

3. Main Content Sections (use exactly this format for each section):
   ## [Section Heading - Make it descriptive and newsworthy]
   [Write clear, concise paragraphs explaining the story]
   
   > "[Include relevant quotes from the transcript]" - [Speaker's Name and Title]
   
   [Continue with additional context and details]

4. Additional Details:
   ## Background and Context
   [Provide relevant background information and wider context]
   
   ## Impact and Implications
   [Explain why this matters and what it means for people]

5. Conclusion:
   ## Looking Ahead
   [End with future implications or next steps]

IMPORTANT GUIDELINES:
- Write in clear, professional news style
- Focus on the most important news first (inverted pyramid)
- Break content into logical sections with clear transitions
- Include at least 3-4 relevant quotes with proper attribution
- Highlight key statistics and numbers using **bold**
- Provide necessary context and background
- Use proper paragraph breaks for readability
- Maintain objectivity and balanced reporting
- Verify all facts and figures mentioned
- Use active voice and present tense for immediacy

FORMATTING RULES:
1. Use ### for main headline (REQUIRED)
2. Use ** for summary text (REQUIRED)
3. Use ## for section headings (REQUIRED)
4. Use > for quotes (REQUIRED)
5. Use **bold** for numbers and statistics (REQUIRED)
6. Use proper paragraph breaks - empty line between paragraphs (REQUIRED)
7. End with the attribution line (REQUIRED)

EXAMPLE ARTICLE:
### Government Unveils Major Infrastructure Project

The government has unveiled a $5 billion infrastructure development plan aimed at modernizing transportation networks across the country. The ambitious project, set to begin next month, will create over 10,000 jobs and significantly improve connectivity between major economic hubs. This initiative represents the largest public infrastructure investment in the nation's history.

## Project Overview
The comprehensive plan includes the construction of new highways, bridges, and rail networks. Minister of Infrastructure John Smith emphasized the transformative nature of the initiative.

> "This is the largest infrastructure investment in our country's history. We're not just building roads, we're building the foundation for our economic future." - John Smith, Minister of Infrastructure

The project will be implemented in three phases over the next five years, with an initial focus on urban areas. The first phase will target high-traffic corridors and critical bottlenecks in major cities.

## Economic Impact
The initiative is expected to generate **$8 billion** in economic activity and create **10,500** direct jobs. Industry experts predict a ripple effect across multiple sectors, including construction, manufacturing, and logistics.

## Background and Context
The announcement comes after years of infrastructure challenges that have hampered economic growth. Previous attempts to address these issues were limited by budget constraints and coordination difficulties between different government agencies.

## Impact and Implications
This massive infrastructure overhaul will not only improve transportation efficiency but also enhance the quality of life for millions of citizens. The project is expected to reduce commute times by up to **40%** in major urban areas and cut transportation costs for businesses by **25%**.

## Looking Ahead
As construction begins next month, the government plans to establish a monitoring committee to ensure transparency and timely completion of all projects. The success of this initiative could serve as a model for future large-scale infrastructure developments.

---
*This article was automatically generated from a news broadcast. Original broadcast date: August 12, 2025.*

Here's the transcript to convert into a news article. Remember to:
1. Focus on the most newsworthy story first
2. Include multiple relevant quotes with proper attribution
3. Provide clear context and background
4. Explain the implications and impact
5. End with a forward-looking conclusion
6. Use all required formatting elements

Transcript:

{$captions}

End the article with exactly this line:
---
*This article was automatically generated from a Citizen TV broadcast. Original video published on {$video->published_at->format('F j, Y')}.*
EOT;

            $response = $openai->chat()->create([
                'model' => config('youtube.openai.model'),
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a professional news writer. Always follow the exact formatting requirements provided. Never skip any required sections.'],
                    ['role' => 'user', 'content' => $prompt]
                ],
                'temperature' => 0.7,
            ]);

            $content = $response->choices[0]->message->content;
            
            // Remove bold formatting from the summary section
            $content = preg_replace('/\*\*([^*]+)\*\*/', '$1', $content);

            // Verify the article has the required sections
            if (!str_contains($content, '###') || !str_contains($content, '##')) {
                // If missing required formatting, try one more time with a stronger prompt
                $retryPrompt = "IMPORTANT: Your previous response was missing required formatting. Please ensure you include ALL required sections exactly as specified:\n\n" . $prompt;
                
                $response = $openai->chat()->create([
                    'model' => config('youtube.openai.model'),
                    'messages' => [
                        ['role' => 'system', 'content' => 'You are a professional news writer. You MUST follow the exact formatting requirements provided. Never skip any required sections.'],
                        ['role' => 'user', 'content' => $retryPrompt]
                    ],
                    'temperature' => 0.5,
                ]);
                
                $content = $response->choices[0]->message->content;
            }

            // Determine the appropriate category based on content
            $categoryPrompt = "Analyze this news article and select the most appropriate category from this list:
- Politics: Political news, government updates, and policy changes
- Business: Business news, economy, markets, and corporate updates
- Health: Healthcare news, medical research, and public health
- Sports: Sports news, matches, and athlete updates
- Technology: Technology news, innovations, and digital trends
- Environment: Environmental news, climate change, and conservation
- Education: Education news, academic updates, and learning
- Crime & Justice: Crime reports, legal proceedings, and justice system news
- Entertainment: Entertainment news, arts, and culture
- General News: General and miscellaneous news coverage

Return ONLY the category name, nothing else. Here's the content:\n\n{$content}";

            $categoryResponse = $openai->chat()->create([
                'model' => config('youtube.openai.model'),
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a news categorization expert. Respond only with the category name.'],
                    ['role' => 'user', 'content' => $categoryPrompt]
                ],
                'temperature' => 0.3,
            ]);

            $categoryName = trim($categoryResponse->choices[0]->message->content);
            
            // Get or create the determined category
            $category = Category::firstOrCreate(
                ['name' => $categoryName],
                [
                    'slug' => Str::slug($categoryName),
                    'description' => 'News articles about ' . strtolower($categoryName)
                ]
            );

            // Convert Markdown to HTML
            $parsedown = new \Parsedown();
            $htmlContent = $parsedown->text($content);

            // Clean up the title by removing the date
            $title = preg_replace('/~\s*Aug\s+\d+,?\s+\d{4}$/', '', $video->title);
            $title = trim($title);

            // Generate SEO-friendly image filename
            $seoImageName = $this->generateSeoImageName($video->title, $video->description);
            
            // Download and store the thumbnail
            $thumbnailContents = file_get_contents($video->thumbnail_url);
            $thumbnailPath = 'blog/posts/' . $seoImageName . '.jpg';
            \Storage::disk('public')->put($thumbnailPath, $thumbnailContents);

            // Create the blog post
            $post = Post::create([
                'title' => trim($title),
                'slug' => Str::slug(trim($title)),
                'body' => $htmlContent,
                'status' => config('youtube.processing.auto_publish') ? 'published' : 'pending',
                'published_at' => now(),
                'cover_photo_path' => $thumbnailPath,
                'photo_alt_text' => $video->title,
                'user_id' => 1, // Default admin user
            ]);

            // Attach category
            $post->categories()->attach($category->id);

            // Link post to video
            $video->update([
                'processed' => true,
                'post_id' => $post->id
            ]);

            $this->info("Created blog post: {$post->title}");

        } catch (\Exception $e) {
            $this->error("Error processing video {$video->video_id}: " . $e->getMessage());
        }
    }

    /**
     * Get video captions using YouTube API
     */
    private function getCaptions(string $videoId): string
    {
        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => config('youtube.rapidapi.key'),
                'X-RapidAPI-Host' => 'youtube-transcriptor.p.rapidapi.com'
            ])->get('https://youtube-transcriptor.p.rapidapi.com/transcript', [
                'video_id' => $videoId,
                'lang' => 'en'
            ]);

            if ($response->successful()) {
                $data = $response->json();
                
                // Log the response for debugging
                $this->info("RapidAPI Response: " . json_encode($data));

                // If we have the transcript in the first item
                if (is_array($data) && count($data) > 0 && isset($data[0]['transcriptionAsText'])) {
                    $text = $data[0]['transcriptionAsText'];
                    
                    // Clean up the text
                    $text = html_entity_decode($text);
                    $text = preg_replace('/^>>\s*/', '', $text);
                    $text = preg_replace('/\s+/', ' ', $text);
                    
                    $this->info("Transcript extracted successfully from array");
                    return trim($text);
                }
                
                // If we have segmented transcription data
                if (is_array($data) && count($data) > 0 && isset($data[0]['transcription']) && is_array($data[0]['transcription'])) {
                    $text = "";
                    foreach ($data[0]['transcription'] as $segment) {
                        if (isset($segment['subtitle'])) {
                            // Clean up the subtitle text
                            $subtitle = $segment['subtitle'];
                            
                            // Remove HTML entities
                            $subtitle = html_entity_decode($subtitle);
                            
                            // Remove speaker markers (">>" at start)
                            $subtitle = preg_replace('/^>>\s*/', '', $subtitle);
                            
                            // Add the cleaned subtitle
                            $text .= $subtitle . " ";
                        }
                    }
                    
                    if (!empty($text)) {
                        $this->info("Transcript extracted successfully from segments");
                        return trim($text);
                    }
                }
                
                // If we have the transcript in the response body
                if (is_string($data)) {
                    $text = $data;
                    
                    // Clean up the text
                    $text = html_entity_decode($text);
                    $text = preg_replace('/^>>\s*/', '', $text);
                    $text = preg_replace('/\s+/', ' ', $text);
                    
                    $this->info("Transcript extracted successfully from response body");
                    return trim($text);
                }
                
                $this->error("No transcript found in the response");
                return "No transcript available for this video.";
            }
            
            $this->error("Failed to get captions: " . $response->body());
            return "No transcript available for this video.";
            
        } catch (\Exception $e) {
            $this->error("Error getting captions: " . $e->getMessage());
            return "Failed to get video transcript. Error: " . $e->getMessage();
        }
    }
}