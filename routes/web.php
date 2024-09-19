<?php

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
        'posts' => [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'author' => 'Nievl',
                'body' => 'Selamat datang di AniLID! Berhubung ini merupakan web baru yang kami mulai di bulan September tahun 2024 ini, maka fitur-fitur layaknya MyAnimeList.net belum tersedia. Jadi kembalilah beberapa waktu kedepan. Terimakasih 🙏🏼😁'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'author' => 'yudayuda78',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius deleniti, provident dolorem nesciunt quidem debitis accusantium ut corrupti tempore excepturi perspiciatis aut soluta consequatur et sunt qui praesentium, amet modi.'
            ]
        ]
    ]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Nievl',
            'body' => 'Selamat datang di AniLID! Berhubung ini merupakan web baru yang kami mulai di bulan September tahun 2024 ini, maka fitur-fitur layaknya MyAnimeList.net belum tersedia. Jadi kembalilah beberapa waktu kedepan. Terimakasih 🙏🏼😁'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'yudayuda78',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius deleniti, provident dolorem nesciunt quidem debitis accusantium ut corrupti tempore excepturi perspiciatis aut soluta consequatur et sunt qui praesentium, amet modi.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

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

