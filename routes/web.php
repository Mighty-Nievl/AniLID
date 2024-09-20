<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => "AniLID",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About AniLID!',
        'about' => 'Anime List ID layaknya MyAnimeList.net versi Indonesia',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog AniLID!',
        'posts' => Post::all(),
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us',
        'contact' => [
            [
                'nama' => 'Nievl',
                'email' => 'nievl0611@gmail.com',
                'banner' => 'img/avatar.svg',
                'alt' => 'Nievl',
            ],
            [
                'nama' => 'yudayuda78',
                'email' => 'yudayuda78@gmail.com',
                'banner' => 'img/yudha.jpg',
                'alt' => 'yudayuda78',
            ],
        ]
    ]);
});

