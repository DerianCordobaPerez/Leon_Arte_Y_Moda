<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/gallery', 'gallery')->name('gallery');
});

Route::prefix('dashboard')->group(function() {
    Auth::routes();

    Route::middleware('auth')->group(function() {
        Route::resources(['posts' => PostController::class]);
    });
});
