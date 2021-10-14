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
        "title" => "Home" 
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Tito Bagus",
        "email" => "baguz@mail",
        "image" => "logo.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tito Bagus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti perspiciatis aliquid fuga praesentium atque molestiae accusantium, voluptatibus cum aperiam assumenda tempore possimus quas quasi modi corporis recusandae exercitationem? Aperiam a nulla impedit dolores placeat recusandae quisquam ipsam doloremque, sapiente perferendis cupiditate eligendi aliquam odit incidunt! Suscipit commodi sapiente accusantium harum quis atque laborum quasi quidem illum sed accusamus minima ut inventore laudantium eos unde, esse tenetur fugit ab vel saepe fuga modi rerum. Laudantium ea sint eveniet eligendi placeat."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syahdewa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti perspiciatis aliquid fuga praesentium atque molestiae accusantium, voluptatibus cum aperiam assumenda tempore possimus quas quasi modi corporis recusandae exercitationem? Aperiam a nulla impedit dolores placeat recusandae quisquam ipsam doloremque, sapiente perferendis cupiditate eligendi aliquam odit incidunt! Suscipit commodi sapiente accusantium harum quis atque laborum quasi quidem illum sed accusamus minima ut inventore laudantium eos unde, esse tenetur fugit ab vel saepe fuga modi rerum. Laudantium ea sint eveniet eligendi placeat."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tito Bagus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti perspiciatis aliquid fuga praesentium atque molestiae accusantium, voluptatibus cum aperiam assumenda tempore possimus quas quasi modi corporis recusandae exercitationem? Aperiam a nulla impedit dolores placeat recusandae quisquam ipsam doloremque, sapiente perferendis cupiditate eligendi aliquam odit incidunt! Suscipit commodi sapiente accusantium harum quis atque laborum quasi quidem illum sed accusamus minima ut inventore laudantium eos unde, esse tenetur fugit ab vel saepe fuga modi rerum. Laudantium ea sint eveniet eligendi placeat."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syahdewa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti perspiciatis aliquid fuga praesentium atque molestiae accusantium, voluptatibus cum aperiam assumenda tempore possimus quas quasi modi corporis recusandae exercitationem? Aperiam a nulla impedit dolores placeat recusandae quisquam ipsam doloremque, sapiente perferendis cupiditate eligendi aliquam odit incidunt! Suscipit commodi sapiente accusantium harum quis atque laborum quasi quidem illum sed accusamus minima ut inventore laudantium eos unde, esse tenetur fugit ab vel saepe fuga modi rerum. Laudantium ea sint eveniet eligendi placeat."
        ],
    ];


    $new_post = [];
    foreach ($blog_posts as $post ) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);    
});
