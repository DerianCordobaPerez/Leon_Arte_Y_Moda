<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
});

Route::middleware('auth')->prefix('dashboard')->group(function() {
    Route::resources(['posts' => PostController::class]);
});
