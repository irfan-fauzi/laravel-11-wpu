<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['header' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['header' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['header' => 'blog',
        'posts' => [
            [
                'id' => '1',
                'author' => 'Irfan fauzi',
                'profilImg' => 'img/user.jpg',
                'title' => 'Your portfolio is stopping you from geting that job',
                'body' => 'An intense way to learn about the process and practice your designs skills — My 1st hackathon Hackathons have been on my mind since I heard it was a good way to gain experience as a junior UX designer. As my portfolio. An intense way to learn about the process and practice your designs skills — My 1st hackathon Hackathons have been on my mind since I heard it was a good way to gain experience as a junior UX designer. As my portfolio.',
                'category' => 'portfolio',
                'duration' => 10,
            ], [
                'id' => '2',
                'author' => 'Aulia Rahman',
                'profilImg' => 'img/user.jpg',
                'title' => 'Why simplicity wins in product design',
                'body' => 'Many designers tend to overcomplicate their interfaces. In this article, we’ll discuss how minimalism not only improves usability but also enhances the emotional connection with users.An intense way to learn about the process and practice your designs skills — My 1st hackathon Hackathons have been on my mind since I heard it was a good way to gain experience as a junior UX designer. As my portfolio.',
                'category' => 'design',
                'duration' => 8,
            ],
            [
                'id' => '3',
                'author' => 'Nadia Putri',
                'profilImg' => 'img/user.jpg',
                'title' => '5 UX mistakes that make users leave your site',
                'body' => 'User experience is more than just a nice interface. Learn about the most common UX mistakes and how to fix them before they affect your conversion rate.An intense way to learn about the process and practice your designs skills — My 1st hackathon Hackathons have been on my mind since I heard it was a good way to gain experience as a junior UX designer. As my portfolio.',
                'category' => 'ux',
                'duration' => 12,
            ],
            [
                'id' => '4',
                'author' => 'Rizky Saputra',
                'profilImg' => 'img/user.jpg',
                'title' => 'Building your design system from scratch',
                'body' => 'A design system helps maintain consistency across products. This guide walks you through the process of creating one that fits your team’s workflow and product needs. An intense way to learn about the process and practice your designs skills — My 1st hackathon Hackathons have been on my mind since I heard it was a good way to gain experience as a junior UX designer. As my portfolio.',
                'category' => 'design system',
                'duration' => 15,
            ],
            [
                'id' => '5',
                'author' => 'Dewi Lestari',
                'profilImg' => 'img/user.jpg',
                'title' => 'The psychology behind color choices in UI design',
                'body' => 'Colors influence user behavior more than you think. We’ll explore how to use color theory effectively to create engaging and accessible interfaces.An intense way to learn about the process and practice your designs skills — My 1st hackathon Hackathons have been on my mind since I heard it was a good way to gain experience as a junior UX designer. As my portfolio.',
                'category' => 'ui',
                'duration' => 9,
            ], ]]);
});

Route::get('/content', function () {
    return view('content', ['header' => 'contact']);
});
