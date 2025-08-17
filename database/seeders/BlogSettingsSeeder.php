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
            'title' => 'Kenya Betting Tips',
            'description' => 'Kenya\'s #1 Football Betting Tips Platform - Free Predictions & Jackpot Analysis',
            'organization_name' => 'Kenya Betting Tips',
            'quick_links' => [
                [
                    'label' => 'Football Betting',
                    'url' => '/blogs/category/football-betting'
                ],
                [
                    'label' => 'Jackpots',
                    'url' => '/blogs/category/jackpots'
                ],
                [
                    'label' => 'Betting Guides',
                    'url' => '/blogs/category/betting-guides'
                ],
                [
                    'label' => 'VIP Tips',
                    'url' => '/blogs/category/vip-tips'
                ],
                [
                    'label' => 'Contact',
                    'url' => '/contact'
                ]
            ]
        ]);
    }
}
