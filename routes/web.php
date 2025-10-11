<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
})->name('test');

// Public pages: Profile & Galeri
Route::view('/profile', 'profile')->name('profile');
Route::view('/galeri', 'galeri')->name('galeri');
// Route::view('/contact', 'contact')->name('contact');
Route::view('/prestasi', 'prestasi')->name('prestasi');
