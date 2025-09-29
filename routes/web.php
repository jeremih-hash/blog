<?php

use App\Models\AppClick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use Firefly\FilamentBlog\Models\ShareSnippet;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/football-predictions', function () {
    return view('football-predictions');
})->name('football.predictions');

Route::get('/soccer-betting-tips', function () {
    return view('soccer-betting-tips');
})->name('soccer.betting.tips');

Route::get('/vip-soccer-betting-tips', function () {
    return view('vip-soccer-betting-tips');
})->name('vip.soccer.betting.tips');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe');

Route::post('/track-app-click', function (Request $request) {
    return AppClick::create([
        'app_id' => $request->app_id,
        'app_name' => $request->app_name,
        'click_type' => $request->click_type,
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent()
    ]);
})->name('track.app.click');

// Blog post routes
Route::get('/{post:slug}', function ($post) {
    $shareButton = ShareSnippet::where('active', true)->first();
    return view('vendor.filament-blog.blogs.show', compact('post', 'shareButton'));
})->name('post.show');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
