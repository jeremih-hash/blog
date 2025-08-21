<?php

use App\Models\AppClick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('home');
});

Route::get('/football-predictions', function () {
    return view('football-predictions');
});

Route::get('/soccer-betting-tips', function () {
    return view('soccer-betting-tips');
});

Route::get('/vip-soccer-betting-tips', function () {
    return view('vip-soccer-betting-tips');
});

Route::post('/subscribe', [SubscribeController::class, 'store']);

Route::post('/track-app-click', function (Request $request) {
    return AppClick::create([
        'app_id' => $request->app_id,
        'app_name' => $request->app_name,
        'click_type' => $request->click_type,
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent()
    ]);
});

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
