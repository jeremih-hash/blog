<?php

namespace App\Console\Commands;

use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Tag;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap';

    public function handle()
    {
        $this->info('Generating sitemap index with separate sitemaps...');
        
        // Create sitemap index
        $sitemapIndex = SitemapIndex::create();
        
        // Generate main sitemap (homepage, posts, and all posts page)
        $this->generateMainSitemap();
        $sitemapIndex->add(url('/sitemap-main.xml'));
        
        // Generate categories sitemap
        $this->generateCategoriesSitemap();
        $sitemapIndex->add(url('/sitemap-categories.xml'));
        
        // Generate a single tags sitemap with all tags
        $this->generateTagsSitemap();
        $sitemapIndex->add(url('/sitemap-tags.xml'));
        
        // Write sitemap index to file
        $sitemapIndex->writeToFile(public_path('sitemap.xml'));
        
        $this->info('Sitemap index generated successfully!');
    }
    
    protected function generateMainSitemap()
    {
        $this->info('Generating main sitemap with posts...');
        $sitemap = Sitemap::create();
        
        // Add home page
        $sitemap->add(
            Url::create(url('/'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0)
        );
        
        // Add all posts page
        $sitemap->add(
            Url::create(url('/all'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
        );

        // Add static pages
        $staticPages = [
            '/football-predictions' => 0.9,
            '/soccer-betting-tips' => 0.9,
            '/vip-soccer-betting-tips' => 0.8,
            '/search' => 0.6
        ];

        foreach ($staticPages as $path => $priority) {
            $sitemap->add(
                Url::create(url($path))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority($priority)
            );
        }
        
        // Add all posts
        $this->info('Adding posts to main sitemap...');
        Post::published()->get()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(
                Url::create(url('/' . $post->slug))
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        });
        $sitemap->writeToFile(public_path('sitemap-main.xml'));
    }
    
    protected function generateCategoriesSitemap()
    {
        $this->info('Generating categories sitemap...');
        $sitemap = Sitemap::create();
        
        Category::all()->each(function (Category $category) use ($sitemap) {
            $sitemap->add(
                Url::create(url('/category/' . $category->slug))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.7)
            );
        });
        
        $sitemap->writeToFile(public_path('sitemap-categories.xml'));
    }
    
    protected function generateTagsSitemap()
    {
        $this->info('Generating tags sitemap...');
        $sitemap = Sitemap::create();
        
        // Get all unique tags
        $tags = Tag::all();
        
        // Group tags by post for better organization in the logs
        $posts = Post::published()->with('tags')->get();
        $tagsByPost = collect();
        
        foreach ($posts as $post) {
            if ($post->tags->count() > 0) {
                $this->info("Adding tags for post: {$post->title}");
            }
        }
        
        // Add all tags to the sitemap
        foreach ($tags as $tag) {
            $sitemap->add(
                Url::create(url('/tag/' . $tag->slug))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.6)
            );
        }
        
        $sitemap->writeToFile(public_path('sitemap-tags.xml'));
    }
}
