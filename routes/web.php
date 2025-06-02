<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
  
});

Route::get('/contact', function () {
    return view('contact');
});
