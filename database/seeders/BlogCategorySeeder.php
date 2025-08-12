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
                'name' => 'Technology',
                'description' => 'Latest tech news and innovations',
            ],
            [
                'name' => 'Travel',
                'description' => 'Travel guides and adventures',
            ],
            [
                'name' => 'Lifestyle',
                'description' => 'Tips for better living',
            ],
            [
                'name' => 'Food & Cooking',
                'description' => 'Recipes and culinary adventures',
            ],
            [
                'name' => 'Programming',
                'description' => 'Coding tutorials and best practices',
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
