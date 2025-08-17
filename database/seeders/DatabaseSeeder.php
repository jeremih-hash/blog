<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run the blog seeders
        $this->call([
            AdminUserSeeder::class,
            BlogCategorySeeder::class,
            BlogTagSeeder::class,
            BlogShareSnippetSeeder::class,
            BlogSettingsSeeder::class,
            SportsBettingPostSeeder::class,
        ]);
    }
}
