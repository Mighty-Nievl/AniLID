<?php

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
        'posts' => [
            [
                'title' => 'Judul Artikel 1',
                'author' => 'Nievl',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda molestias, iusto debitis veritatis alias culpa expedita aperiam libero ex, amet perferendis non impedit a modi totam quis ad voluptas nulla.'
            ],
            [
                'title' => 'Judul Artikel 2',
                'author' => 'yudayuda78',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius deleniti, provident dolorem nesciunt quidem debitis accusantium ut corrupti tempore excepturi perspiciatis aut soluta consequatur et sunt qui praesentium, amet modi.'
            ]
        ]
    ]);
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

