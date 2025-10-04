<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'irfan']);
});

Route::get('/blog', function () {
    return view('blog', ['nama' => 'irfan']);
});

Route::get('/content', function () {
    return view('content', ['nama' => 'irfan']);
});

