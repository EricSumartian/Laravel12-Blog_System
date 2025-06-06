<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/posts', function () {
    $posts = [
        [ 
            'id' => 1,
            'title'=> 'Judul Artikel 1',
            'author' => 'Eric Sumartian',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        [ 
            'id' => 2,
            'title'=> 'Judul Artikel 2',
            'author' => 'John Doe',
            'body'=> 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) {
        $posts = [
        [ 
            'id' => 1,
            'title'=> 'Judul Artikel 1',
            'author' => 'Eric Sumartian',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        [ 
            'id' => 2,
            'title'=> 'Judul Artikel 2',
            'author' => 'John Doe',
            'body'=> 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
