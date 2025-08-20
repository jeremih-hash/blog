<?php

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

Route::get('/sitemap.xml', [SitemapController::class, 'index']);