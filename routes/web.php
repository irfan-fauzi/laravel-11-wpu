<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['header' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['header' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['header' => 'blog']);
});

Route::get('/content', function () {
    return view('content', ['header' => 'contact']);
});

