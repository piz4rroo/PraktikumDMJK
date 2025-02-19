<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']) ;
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']) ;
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']) ;
})->name('about');