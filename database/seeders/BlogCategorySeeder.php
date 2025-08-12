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
                'name' => 'Politics',
                'description' => 'Political news, government updates, and policy changes',
            ],
            [
                'name' => 'Business',
                'description' => 'Business news, economy, markets, and corporate updates',
            ],
            [
                'name' => 'Health',
                'description' => 'Healthcare news, medical research, and public health',
            ],
            [
                'name' => 'Sports',
                'description' => 'Sports news, matches, and athlete updates',
            ],
            [
                'name' => 'Technology',
                'description' => 'Technology news, innovations, and digital trends',
            ],
            [
                'name' => 'Environment',
                'description' => 'Environmental news, climate change, and conservation',
            ],
            [
                'name' => 'Education',
                'description' => 'Education news, academic updates, and learning',
            ],
            [
                'name' => 'Crime & Justice',
                'description' => 'Crime reports, legal proceedings, and justice system news',
            ],
            [
                'name' => 'Entertainment',
                'description' => 'Entertainment news, arts, and culture',
            ],
            [
                'name' => 'General News',
                'description' => 'General and miscellaneous news coverage',
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
