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

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private function createPlaceholderImage($filename, $text)
    {
        $path = storage_path('app/public/blog/posts/' . $filename);
        
        // Create a 1200x800 image
        $image = imagecreatetruecolor(1200, 800);
        
        // Set background color (light gray)
        $bgColor = imagecolorallocate($image, 240, 240, 240);
        imagefill($image, 0, 0, $bgColor);
        
        // Set text color (dark gray)
        $textColor = imagecolorallocate($image, 60, 60, 60);
        
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
                'title' => 'Getting Started with Laravel',
                'content' => '<h2>Welcome to Laravel!</h2><p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.</p><p>Laravel takes the pain out of development by easing common tasks used in many web projects.</p>',
                'category' => 'Programming',
            ],
            [
                'title' => 'The Future of AI Technology',
                'content' => '<h2>Artificial Intelligence Revolution</h2><p>AI is transforming how we live and work. From machine learning to neural networks, the possibilities are endless.</p><p>Learn how AI is shaping our future and what it means for you.</p>',
                'category' => 'Technology',
            ],
            [
                'title' => 'Hidden Gems of Southeast Asia',
                'content' => '<h2>Discover Paradise</h2><p>Southeast Asia offers countless hidden treasures waiting to be discovered. From pristine beaches to ancient temples, every corner tells a story.</p><p>Join us on a journey through this fascinating region.</p>',
                'category' => 'Travel',
            ],
            [
                'title' => 'Healthy Living in the Modern World',
                'content' => '<h2>Balance is Key</h2><p>In today\'s fast-paced world, maintaining a healthy lifestyle can be challenging. Learn practical tips for staying healthy while managing a busy schedule.</p>',
                'category' => 'Lifestyle',
            ],
            [
                'title' => 'Traditional Recipes with a Modern Twist',
                'content' => '<h2>Culinary Innovation</h2><p>Discover how to reinvent classic recipes while maintaining their authentic essence. These fusion dishes will revolutionize your cooking.</p>',
                'category' => 'Food & Cooking',
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
                    'keywords' => explode(' ', Str::lower($postData['title'])),
                ]);
            }
        }
    }
}
