<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "jabriq1",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem reprehenderit officiis repudiandae sed, accusamus quos dolore excepturi aliquid molestiae ea, odit saepe explicabo animi delectus! Ducimus sint aliquam eveniet possimus?"
        ],
        [
            "title" => "judul post kedua", 
            "slug" => "judul-post-kedua",
            "author" => "jabriqueee",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem reprehenderit officiis repudiandae sed, accusamus quos dolore excepturi aliquid molestiae ea, odit saepe explicabo animi delectus! Ducimus sint aliquam eveniet possimus?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
