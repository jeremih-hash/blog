<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Firefly\FilamentBlog\Models\Tag;
use Firefly\FilamentBlog\Models\Post;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Laravel' => ['framework', 'php', 'web-development'],
            'Technology' => ['innovation', 'tech', 'future'],
            'Travel' => ['adventure', 'explore', 'destinations'],
            'Lifestyle' => ['wellness', 'health', 'mindfulness'],
            'Food' => ['recipes', 'cooking', 'cuisine'],
            'Programming' => ['coding', 'development', 'software'],
            'Tutorial' => ['guide', 'learning', 'education'],
            'Tips' => ['advice', 'howto', 'tricks'],
        ];

        // Create tags
        foreach ($tags as $category => $categoryTags) {
            foreach ($categoryTags as $tagName) {
                Tag::create([
                    'name' => $tagName,
                    'slug' => Str::slug($tagName),
                ]);
            }
        }

        // Attach random tags to existing posts
        $posts = Post::all();
        $allTags = Tag::all();

        foreach ($posts as $post) {
            // Attach 2-4 random tags to each post
            $randomTags = $allTags->random(rand(2, 4));
            $post->tags()->attach($randomTags->pluck('id')->toArray());
        }
    }
}
