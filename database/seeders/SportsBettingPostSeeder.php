<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SportsBettingPostSeeder extends Seeder
{
    /**
     * Create a placeholder image for blog posts
     */
    private function createPlaceholderImage($filename, $text)
    {
        // Create directory if it doesn't exist
        $directory = storage_path('app/public/blog/posts');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }
        
        $path = storage_path('app/public/blog/posts/' . $filename);
        
        // Create a 1200x800 image
        $image = imagecreatetruecolor(1200, 800);
        
        // Set background color (green for football field)
        $bgColor = imagecolorallocate($image, 34, 139, 34);
        imagefill($image, 0, 0, $bgColor);
        
        // Draw field markings
        $white = imagecolorallocate($image, 255, 255, 255);
        
        // Center circle
        imageellipse($image, 600, 400, 200, 200, $white);
        
        // Center line
        imageline($image, 600, 0, 600, 800, $white);
        
        // Goal areas
        imagerectangle($image, 100, 250, 200, 550, $white);
        imagerectangle($image, 1000, 250, 1100, 550, $white);
        
        // Set text color (white)
        $textColor = $white;
        
        // Add text
        $fontSize = 40;
        $font = public_path('fonts/OpenSans-Regular.ttf');
        
        // If font doesn't exist, use default
        if (!file_exists($font)) {
            // Use basic text
            $text = wordwrap($text, 30);
            imagestring($image, 5, 400, 300, $text, $textColor);
        } else {
            // Use fancy text with TTF font
            imagettftext($image, $fontSize, 0, 300, 400, $textColor, $font, $text);
        }
        
        // Save the image
        imagejpeg($image, $path, 90);
        imagedestroy($image);
        
        return basename($path);
    }

    public function run(): void
    {
        // Create a test user if none exists
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        $categories = Category::all();

        $posts = [
            [
                'title' => 'Today\'s Free Football Betting Tips for Kenyan Bettors',
                'content' => '<h2>Free Football Betting Tips for Today</h2><p>Welcome to Kenya\'s #1 Football Betting Tips Platform! Our expert analysts have carefully selected the best football matches to bet on today.</p><p>Here are our top picks for today\'s matches with the highest probability of winning:</p><ul><li>Manchester United vs Arsenal: Over 2.5 Goals @ 1.85</li><li>Chelsea vs Liverpool: Both Teams to Score @ 1.75</li><li>Barcelona vs Real Madrid: Barcelona to Win @ 2.10</li></ul><p>Remember to bet responsibly and only stake what you can afford to lose.</p>',
                'category' => 'Football Betting',
            ],
            [
                'title' => 'Odibet Laki Tatu Jackpot Predictions for This Weekend',
                'content' => '<h2>Odibet Laki Tatu Jackpot Analysis</h2><p>Our expert tipsters have analyzed all matches in this weekend\'s Odibet Laki Tatu Jackpot. Here are our predictions with detailed analysis for each match.</p><p>The jackpot is currently at Ksh 3,500,000 and our team has a 85% accuracy rate on previous jackpot predictions.</p><table><tr><th>Match</th><th>Prediction</th><th>Odds</th></tr><tr><td>Arsenal vs Chelsea</td><td>1</td><td>2.10</td></tr><tr><td>Liverpool vs Man City</td><td>X</td><td>3.25</td></tr><tr><td>Barcelona vs Real Madrid</td><td>1</td><td>1.95</td></tr></table><p>Get our complete jackpot access for more detailed analysis!</p>',
                'category' => 'Jackpots',
            ],
            [
                'title' => 'How to Choose the Best Betting Site in Kenya',
                'content' => '<h2>Finding the Right Betting Platform in Kenya</h2><p>With dozens of betting sites available to Kenyan punters, choosing the right one can be overwhelming. This guide will help you select the best betting site based on important factors.</p><h3>Key Factors to Consider</h3><ul><li>License and Regulation: Always choose sites licensed by BCLB</li><li>Competitive Odds: Compare odds across multiple platforms</li><li>Payment Methods: Look for sites supporting M-Pesa and other local payment options</li><li>Bonuses and Promotions: Check welcome bonuses and ongoing promotions</li><li>Customer Support: 24/7 support is essential for quick resolution of issues</li></ul><p>Our top recommended betting sites in Kenya include 22Bet, Betway, and Odibets.</p>',
                'category' => 'Betting Guides',
            ],
            [
                'title' => 'M-Pesa Deposits and Withdrawals Guide for Kenyan Betting Sites',
                'content' => '<h2>How to Use M-Pesa for Betting Transactions</h2><p>M-Pesa is the most popular payment method for betting sites in Kenya. This guide explains how to make deposits and withdrawals using M-Pesa.</p><h3>Making a Deposit</h3><ol><li>Go to M-Pesa on your phone</li><li>Select "Lipa na M-Pesa"</li><li>Select "Pay Bill"</li><li>Enter the betting site\'s paybill number</li><li>Enter your account number/ID</li><li>Enter amount (minimum Ksh 50)</li><li>Enter your M-Pesa PIN</li><li>Confirm the transaction</li></ol><h3>Making a Withdrawal</h3><p>Most betting sites process M-Pesa withdrawals instantly. Simply navigate to the withdrawal section, select M-Pesa, enter your phone number and amount, then confirm.</p><p>Withdrawal limits typically range from Ksh 50 to Ksh 150,000 per transaction.</p>',
                'category' => 'Payment Methods',
            ],
            [
                'title' => 'Premium VIP Tips: Today\'s Sure Bets with 90% Accuracy',
                'content' => '<h2>VIP Betting Tips with High Accuracy</h2><p>Our premium VIP tips have maintained a 90% accuracy rate over the past month. Today\'s VIP selections are carefully analyzed by our expert team.</p><h3>Today\'s VIP Selections</h3><ul><li>Arsenal vs Chelsea: Arsenal Win & Over 2.5 Goals @ 3.20</li><li>Bayern Munich vs Dortmund: Bayern -1.5 Asian Handicap @ 2.05</li><li>PSG vs Marseille: Both Teams to Score & Over 2.5 Goals @ 1.95</li></ul><p>These selections have been analyzed using advanced statistics, team news, and historical data to ensure the highest probability of winning.</p><p>Join our VIP membership to receive daily premium tips with detailed analysis and reasoning.</p>',
                'category' => 'VIP Tips',
            ],
            [
                'title' => '22Bet Kenya Review: Bonuses, Markets, and Payment Methods',
                'content' => '<h2>Comprehensive Review of 22Bet Kenya</h2><p>22Bet is one of the leading betting sites in Kenya, offering a wide range of sports markets, competitive odds, and excellent bonuses.</p><h3>Key Features</h3><ul><li>Welcome Bonus: 100% up to Ksh 15,000</li><li>Sports Markets: Over 1,000 events daily</li><li>Odds Quality: Very competitive (average margin 4.5%)</li><li>Live Betting: Excellent with live streaming available</li><li>Mobile App: Available for Android and iOS</li><li>Payment Methods: M-Pesa, Airtel Money, bank transfers</li><li>Customer Support: 24/7 via live chat, email, and phone</li></ul><p>22Bet stands out for its extensive market coverage and competitive odds, making it an excellent choice for Kenyan bettors.</p><img src="/images/22bet.png" alt="22Bet Kenya" />',
                'category' => 'Betting Sites',
            ],
            [
                'title' => 'Latest Betting Promotions and Bonuses for Kenyan Players',
                'content' => '<h2>Best Current Betting Offers in Kenya</h2><p>Stay updated with the latest promotions and bonuses from top Kenyan betting sites. These offers can significantly boost your betting bankroll.</p><h3>Current Top Promotions</h3><ul><li>Betway: 100% first deposit bonus up to Ksh 5,000</li><li>Odibets: Free Ksh 30 bet for new registrations</li><li>22Bet: 100% welcome bonus up to Ksh 15,000</li><li>Mozzart Bet: 150% bonus on multi-bets</li><li>Betika: Jackpot bonus of up to 100% on winnings</li></ul><p>Remember to always read the terms and conditions of each bonus offer, paying special attention to wagering requirements and minimum odds restrictions.</p><img src="/images/mozzart.png" alt="Mozzart Bet Promotion" />',
                'category' => 'Betting Promotions',
            ],
            [
                'title' => 'Live Betting Strategies for Kenyan Football Matches',
                'content' => '<h2>Mastering In-Play Betting on Kenyan Football</h2><p>Live betting offers exciting opportunities for profitable wagers during matches. This guide covers effective strategies for live betting on Kenyan Premier League and international matches.</p><h3>Key Live Betting Strategies</h3><ol><li><strong>Watch the Match:</strong> Always try to watch the game you\'re betting on to assess team performance</li><li><strong>Momentum Shifts:</strong> Identify when a team gains momentum and back them to score next</li><li><strong>Early Goal Impact:</strong> Teams that concede early often push forward, leading to more goals</li><li><strong>Weather Conditions:</strong> Rain in Kenya can significantly impact goal scoring</li><li><strong>Injury Assessment:</strong> Key player injuries during a match can dramatically shift odds</li></ol><p>The best markets for live betting include next goal, over/under goals, and Asian handicaps as they adjust throughout the match.</p>',
                'category' => 'Live Betting',
            ],
            [
                'title' => 'Popular Casino Games Available to Kenyan Players',
                'content' => '<h2>Online Casino Gaming in Kenya</h2><p>Many betting sites in Kenya now offer casino games alongside sports betting. Here\'s a guide to the most popular casino games available to Kenyan players.</p><h3>Top Casino Games in Kenya</h3><ul><li><strong>Slots:</strong> Games like Book of Dead, Starburst, and Sweet Bonanza are player favorites</li><li><strong>Roulette:</strong> European and American variants widely available</li><li><strong>Blackjack:</strong> Classic and live dealer versions</li><li><strong>Baccarat:</strong> Growing in popularity among Kenyan players</li><li><strong>Crash Games:</strong> Aviator and similar games are trending</li></ul><p>Most betting sites offer welcome bonuses specifically for casino games, often including free spins or matched deposits.</p><p>Remember that casino games are based on chance, and you should always play responsibly.</p>',
                'category' => 'Casino Games',
            ],
            [
                'title' => 'Responsible Gambling Tips for Kenyan Bettors',
                'content' => '<h2>Betting Responsibly in Kenya</h2><p>While sports betting can be entertaining, it\'s important to approach it responsibly. Here are essential tips for maintaining healthy betting habits.</p><h3>Responsible Gambling Guidelines</h3><ol><li><strong>Set a Budget:</strong> Only bet what you can afford to lose</li><li><strong>Time Limits:</strong> Set strict time limits for your betting activities</li><li><strong>Avoid Chasing Losses:</strong> Never try to recover losses with bigger bets</li><li><strong>Keep Perspective:</strong> View betting as entertainment, not income</li><li><strong>Use Betting Tools:</strong> Utilize deposit limits and self-exclusion features</li></ol><p>If you feel your betting habits are becoming problematic, organizations like the Betting Control and Licensing Board of Kenya provide resources for help.</p><p>Remember: Betting should be fun and not cause financial or emotional distress.</p>',
                'category' => 'Responsible Gambling',
            ],
        ];

        foreach ($posts as $postData) {
            $category = $categories->where('name', $postData['category'])->first();
            
            if ($category) {
                $post = Post::create([
                    'title' => $postData['title'],
                    'slug' => Str::slug($postData['title']),
                    'body' => $postData['content'],
                    'user_id' => $user->id,
                    'status' => 'published',
                    'published_at' => now(),
                    'cover_photo_path' => $this->createPlaceholderImage(Str::slug($postData['title']) . '.jpg', $postData['title']),
                    'photo_alt_text' => $postData['title'],
                ]);

                // Attach the category
                $post->categories()->attach($category->id);

                // Create SEO details
                $post->seoDetail()->create([
                    'title' => $postData['title'],
                    'description' => Str::limit(strip_tags($postData['content']), 160),
                    'keywords' => array_merge(
                        explode(' ', Str::lower($postData['title'])),
                        ['Kenya', 'betting', 'tips', 'predictions', 'football', 'Ksh', 'free tips', 'jackpot']
                    ),
                ]);
            }
        }
    }
}
