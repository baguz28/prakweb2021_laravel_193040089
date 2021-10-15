<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
