<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Firefly\FilamentBlog\Models\ShareSnippet;

class BlogShareSnippetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example ShareThis.com social media sharing buttons
        ShareSnippet::create([
            'script_code' => '
                <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=your_property_id&product=inline-share-buttons" async="async"></script>
            ',
            'html_code' => '
                <div class="sharethis-inline-share-buttons"></div>
            ',
            'active' => true,
        ]);

        // Example AddThis.com social media sharing buttons
        ShareSnippet::create([
            'script_code' => '
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=your_pub_id"></script>
            ',
            'html_code' => '
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            ',
            'active' => false,
        ]);
    }
}
