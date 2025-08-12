<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Firefly\FilamentBlog\Models\Setting;

class BlogSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'title' => 'Firefly Blog',
            'description' => 'A modern blog powered by Laravel and Filament',
            'organization_name' => 'Firefly Blog',
            'quick_links' => [
                [
                    'label' => 'Technology Blog',
                    'url' => 'https://127.0.0.1:8001/blogs/category/technology'
                ],
                [
                    'label' => 'Programming Tutorials',
                    'url' => 'https://127.0.0.1:8001/blogs/category/programming'
                ],
                [
                    'label' => 'Travel Stories',
                    'url' => 'https://127.0.0.1:8001/blogs/category/travel'
                ],
                [
                    'label' => 'About Us',
                    'url' => 'https://127.0.0.1:8001/about'
                ],
                [
                    'label' => 'Contact',
                    'url' => 'https://127.0.0.1:8001/contact'
                ]
            ]
        ]);
    }
}
