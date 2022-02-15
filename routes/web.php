<?php

use Illuminate\Support\Facades\Route;

Route::group([], function() {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
