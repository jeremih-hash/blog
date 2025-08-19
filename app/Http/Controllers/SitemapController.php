<?php

namespace App\Http\Controllers;

use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Tag;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();

        // Add home page
        $sitemap->add(Url::create(url('/')))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0);

        // Add all posts
        Post::published()->get()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(
                Url::create(url('/' . $post->slug))
                    ->setLastModificationDate($post->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        });

        // Add all categories
        Category::all()->each(function (Category $category) use ($sitemap) {
            $sitemap->add(
                Url::create(url('/category/' . $category->slug))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.7)
            );
        });

        // Add all tags
        Tag::all()->each(function (Tag $tag) use ($sitemap) {
            $sitemap->add(
                Url::create(url('/tag/' . $tag->slug))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.6)
            );
        });

        // Add all posts page
        $sitemap->add(
            Url::create(url('/all'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
        );

        return $sitemap->toResponse(request());
    }
}
