<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileUploadController;


use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'homepage'])->name('home');


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'App\Http\Controllers\Auth\LoginRegisterController@register')->name('register');
    Route::post('/store', 'App\Http\Controllers\Auth\LoginRegisterController@store')->name('store');
    Route::get('/login', 'App\Http\Controllers\Auth\LoginRegisterController@login')->name('login');
    Route::post('/authenticate', 'App\Http\Controllers\Auth\LoginRegisterController@authenticate')->name('authenticate');
    Route::get('/dashboard', 'App\Http\Controllers\Auth\LoginRegisterController@dashboard')->name('dashboard');
    Route::post('/logout', 'App\Http\Controllers\Auth\LoginRegisterController@logout')->name('logout');
});

Route::Resource('products', 'App\Http\Controllers\ProductController');

