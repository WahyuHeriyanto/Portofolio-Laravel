<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/portofolio', function () {
    return view('portofolio', [
        'title' => 'Wahyu Heriyanto | Home',
        'name' => 'Wahyu Heriyanto',
        'ttl' => 'Magelang'
    ]);
});

Route::get('/blog', function () {

$blog_posts = [
    [
        "title" => "Pengalaman KRTI 2023",
        "slug" => "pertama",
        "date" => "20 September 2023",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto dolorum dolor voluptates at praesentium. Mollitia sunt est deserunt dolorum nostrum. In excepturi ratione, similique odio amet ipsam nobis maxime illo?"
    ],
    [
        "title" => "Pengalaman Bangkit Academy",
        "slug" => "kedua",
        "date" => "12 Agustus 2023",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto dolorum dolor voluptates at praesentium. Mollitia sunt est deserunt dolorum nostrum. In excepturi ratione, similique odio amet ipsam nobis maxime illo?"
    ],
    ];
    return view('blog', [
        'title' => 'Wahyu Heriyanto | Blog',
        'posts' => $blog_posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Wahyu Heriyanto | Contact'
    ]);
});

Route::get('/blog/{slug}', function () {
    return view('blogging', [
        'title' => 'Post Pertama'
    ]);
});