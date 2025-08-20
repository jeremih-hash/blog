<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Filament auth routes
Route::post('/admin/login', function () {
    return app(\Filament\Http\Responses\Auth\LoginResponse::class);
})->middleware(['web'])->name('filament.admin.auth.login.store');