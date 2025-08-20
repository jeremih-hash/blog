<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use Filament\Http\Controllers\Auth\LoginController;

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

// Admin routes
Route::name('filament.')->group(function () {
    Route::get('admin/login', [LoginController::class, 'create'])->name('auth.login');
    Route::post('admin/login', [LoginController::class, 'store']);
});
