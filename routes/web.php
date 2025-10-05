<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home', ['header' => 'Home', 'title' => 'home']);
});

Route::get('/about', function () {
    return view('page.about', ['header' => 'About', 'title' => 'about']);
});

Route::get('/blog', function () {
    return view('page.blog.index', ['header' => 'blog', 'title' => 'blog', 'posts' => Post::all()]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::getPostBySlug($slug);
    return view('page.blog.detailblog', ['title' => $post['title'], 'header' => 'Fresh from the oven', 'post' => $post]);
});

Route::get('/content', function () {
    return view('page.content', ['header' => 'contact', 'title' => 'contact']);
});
