<?php

/**
 * |--------------------------------------------------------------------------
 * | Set up your blog configuration
 * |--------------------------------------------------------------------------
 * |
 * | The route configuration is for setting up the route prefix and middleware.
 * | The user configuration is for setting up the user model and columns.
 * | The seo configuration is for setting up the default meta tags for the blog.
 * | The recaptcha configuration is for setting up the recaptcha for the blog.
 */

use App\Models\User;

return [
    'tables' => [
        'prefix' => 'fblog_', // prefix for all blog tables
    ],
    'route' => [
        'prefix' => '',
        'middleware' => ['web'],
        'home' => [
            'name' => 'filamentblog.home',
            'url' => env('APP_URL'),
        ],
        'login' => [
            'name' => 'filamentblog.post.login',
            'url' => '/admin/login',
        ],
    ],
    'user' => [
        'model' => User::class,
        'foreign_key' => 'user_id',
        'columns' => [
            'name' => 'name',
            'avatar' => 'profile_photo_path', // column name for avatar
        ],
    ],
    'seo' => [
        'meta' => [
            'title' => 'Top Football App - Football Betting Tips & Predictions',
            'description' => 'Get the best football betting tips and predictions',
            'keywords' => ['Kenya', 'Football', 'Betting Tips', 'Predictions', 'Odibet', 'Jackpot'],
        ],
    ],

    'content' => [
        'parser' => 'markdown', // Enable Markdown parsing
        'editor' => [
            'type' => 'markdown',
            'toolbar' => [
                'heading', 'bold', 'italic', 'blockquote', 'code',
                'bulletList', 'orderedList', 'link', 'horizontalRule'
            ],
        ],
    ],

    'recaptcha' => [
        'enabled' => false,
        'site_key' => env('RECAPTCHA_SITE_KEY'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY'),
    ],
];