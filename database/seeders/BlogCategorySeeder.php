<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Firefly\FilamentBlog\Models\Category;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Football Betting',
                'description' => 'Football betting tips, predictions, and strategies for Kenyan bettors',
            ],
            [
                'name' => 'Jackpots',
                'description' => 'Jackpot predictions, analysis, and winning strategies for Kenyan betting sites',
            ],
            [
                'name' => 'Betting Guides',
                'description' => 'Comprehensive guides on how to bet successfully in Kenya',
            ],
            [
                'name' => 'Payment Methods',
                'description' => 'Information about deposit and withdrawal options for Kenyan betting sites',
            ],
            [
                'name' => 'VIP Tips',
                'description' => 'Premium betting tips and predictions with high accuracy rates',
            ],
            [
                'name' => 'Betting Sites',
                'description' => 'Reviews and comparisons of popular betting sites in Kenya',
            ],
            [
                'name' => 'Betting Promotions',
                'description' => 'Latest bonuses, free bets, and promotional offers from Kenyan bookmakers',
            ],
            [
                'name' => 'Live Betting',
                'description' => 'Tips and strategies for in-play betting on Kenyan betting platforms',
            ],
            [
                'name' => 'Casino Games',
                'description' => 'Information about online casino games available to Kenyan players',
            ],
            [
                'name' => 'Responsible Gambling',
                'description' => 'Resources and advice for responsible gambling practices in Kenya',
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
            ]);
        }
    }
}
