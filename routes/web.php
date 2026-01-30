<?php

use Illuminate\Support\Facades\Route;

// Halaman 1: Home
Route::get('/', function () {
    return view('home');
});

// Halaman 2: Classes
Route::get('/classes', function () {
    return view('classes');
});

// Halaman 3: Gallery
Route::get('/gallery', function () {
    return view('gallery');
});

// Halaman 4: Register
Route::get('/register', function () {
    return view('register');
});

// Halaman 5: About
Route::get('/about', function () {
    return view('about');
});

// Halaman 6: Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});