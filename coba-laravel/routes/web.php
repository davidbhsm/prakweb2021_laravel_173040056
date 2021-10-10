<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "David Bhisma",
        "email" => "davidbhism@gmail.com",
        "image" => "david.png"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
            "tittle" => "Lorem 1",
            "slug" => "lorem-1",
            "author" => "David Bhisma Laksana",
            "body" =>   "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores voluptatem non at magnam tempore itaque autem quidem pariatur, 
                        maxime alias quas aperiam tempora repudiandae, provident ipsa. A, obcaecati nisi 
                        ab quod, minima, architecto maxime temporibus esse voluptate at laboriosam rem quasi 
                        facere sint minus. Officia quasi enim laudantium repellat eum id molestias, sapiente numquam 
                        suscipit vitae perspiciatis est accusantium ab! Sit ipsum esse error aspernatur rem ea assumenda 
                        illo officiis. Sequi mollitia aspernatur ipsum perspiciatis veritatis reiciendis accusantium fugit porro."
        ],
        [
            "tittle" => "Lorem 2",
            "slug" => "lorem-2",
            "author" => "Dwi Nur Margestinia",
            "body" =>   "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores voluptatem non at magnam tempore itaque autem quidem pariatur, 
                        maxime alias quas aperiam tempora repudiandae, provident ipsa. A, obcaecati nisi 
                        ab quod, minima, architecto maxime temporibus esse voluptate at laboriosam rem quasi 
                        facere sint minus. Officia quasi enim laudantium repellat eum id molestias, sapiente numquam 
                        suscipit vitae perspiciatis est accusantium ab! Sit ipsum esse error aspernatur rem ea assumenda 
                        illo officiis. Sequi mollitia aspernatur ipsum perspiciatis veritatis reiciendis accusantium fugit porro.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus incidunt, voluptatum aliquam tenetur atque 
                        et omnis sapiente molestias placeat, laudantium corporis quae vero. Commodi impedit quam dolor veniam. Minus, sed."
        ]
    
    
    ];

    return view('posts', [
        "tittle" => "Blog",
        "blog" => $blog_posts
    ]);
});

// Halaman single post
Route::get('blog/{slug}', function($slug) {
    return view('blogs', [
        "tittle" => "single Post"
    ]);
});