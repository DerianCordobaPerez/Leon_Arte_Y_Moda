<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
});
