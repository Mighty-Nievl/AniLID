<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all () {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Nievl',
                'body' => 'Selamat datang di AniLID! Berhubung ini merupakan web baru yang kami mulai di bulan September tahun 2024 ini, maka fitur-fitur layaknya MyAnimeList.net belum tersedia. Jadi kembalilah beberapa waktu kedepan. Terimakasih 🙏🏼😁'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'yudayuda78',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius deleniti, provident dolorem nesciunt quidem debitis accusantium ut corrupti tempore excepturi perspiciatis aut soluta consequatur et sunt qui praesentium, amet modi.'
            ]
        ];
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
