<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Fetch new videos every 30 minutes and process them into blog posts
        // $schedule->command('youtube:fetch-videos --process')
        //         ->everyThirtyMinutes()
        //         ->withoutOverlapping();
                
        // Generate sitemap every 6 hours to ensure fresh content is crawled
        $schedule->command('sitemap:generate')
                ->everyFourHours()
                ->withoutOverlapping()
                ->onSuccess(function () {
                    // Ping search engines after successful generation
                    $sitemapUrl = url('/sitemap.xml');
                    
                    // Ping Google
                    file_get_contents('https://www.google.com/ping?sitemap=' . urlencode($sitemapUrl));
                    
                    // Ping Bing
                    file_get_contents('https://www.bing.com/ping?sitemap=' . urlencode($sitemapUrl));
                })
                ->emailOutputOnFailure(config('mail.admin_email'));
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}