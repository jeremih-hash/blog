<?php

return [
    /*
    |--------------------------------------------------------------------------
    | YouTube API Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can configure your YouTube API settings. You'll need to get
    | an API key from the Google Cloud Console.
    |
    */

    'api_key' => env('YOUTUBE_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Channel Configuration
    |--------------------------------------------------------------------------
    |
    | Configure the YouTube channels you want to fetch videos from.
    |
    */

    'channels' => [
        'citizen_tv' => [
            'handle' => '@kenyacitizentv',  // Citizen TV's YouTube handle
            'max_results' => 1,  // Number of videos to fetch per run
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | OpenAI Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for OpenAI API used to generate blog posts from video captions.
    |
    */

    'openai' => [
        'api_key' => env('OPENAI_API_KEY'),
        'model' => 'gpt-4',  // or gpt-3.5-turbo
        'temperature' => 0.7,
    ],

    /*
    |--------------------------------------------------------------------------
    | Processing Configuration
    |--------------------------------------------------------------------------
    |
    | Configure how videos are processed and converted to blog posts.
    |
    */

    'processing' => [
        'default_category' => 'News',  // Default category for generated posts
        'auto_publish' => true,  // Automatically publish generated posts
        'fetch_interval' => 30,  // Minutes between fetches
    ],

    /*
    |--------------------------------------------------------------------------
    | RapidAPI Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for RapidAPI services used to extract video captions.
    |
    */
    'rapidapi' => [
        'key' => env('RAPIDAPI_KEY', '9ddaa9a5e5msh8b1ce289c6f7316p1fa909jsnea83bbed2fa4'),
        'host' => 'youtube-transcriptor.p.rapidapi.com',
    ],
];