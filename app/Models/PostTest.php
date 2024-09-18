<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post
{
    private static $blog_posts =[
    [
        "title" => "Judul Pertama",
        "slug" => "judul-pertama",
        "author" => "Sandy",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quasi necessitatibus officia nisi molestiae similique pariatur. Mollitia quasi at expedita, minima reiciendis porro consequuntur, repudiandae rem perferendis sed necessitatibus iure!"
    ],
    [
        "title" => "Judul Kedua",
        "slug" => "judul-kedua",
        "author" => "Rupini",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur harum nulla sed nisi, eos ut maxime obcaecati ducimus temporibus odit vitae iure sequi assumenda, ipsum quia consequuntur unde voluptatibus. Neque?"
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug){
        //     $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}
