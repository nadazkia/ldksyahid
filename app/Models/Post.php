<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nada Fatiyyah Azkia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aut dolor excepturi expedita vitae quo accusamus voluptatibus, nam suscipit aspernatur, necessitatibus similique unde ab. Quibusdam ea, est laborum magnam eius illum rem nemo veniam repellat ad ipsam asperiores laudantium vero incidunt. Sunt, doloribus similique? Distinctio, in eaque minus cupiditate ab atque quis aperiam laboriosam odit ex dolore amet sit labore iusto voluptatibus! Illo laboriosam porro explicabo autem blanditiis, velit sint eius numquam impedit laborum in fugiat cum temporibus quisquam ab."
        ],
        [
            "title" => "Judul Post Uwuu",
            "slug" => "judul-post-kedua",
            "author" => "Najwa Fitrah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam quaerat officiis pariatur, sit similique aliquam dolorum repellat modi labore atque nulla, consequatur iste, explicabo hic! Et beatae nisi vero! Quos omnis officia dolore voluptate sunt a distinctio expedita quia quidem commodi amet illum eum error repudiandae unde in, quas placeat. Veniam mollitia fugiat perspiciatis illum hic autem? Molestiae quas magni qui odio ea perferendis? Aperiam doloremque accusamus odio! Nostrum quis itaque commodi amet, veritatis molestiae soluta nulla vero inventore doloribus eos quisquam ullam blanditiis iusto esse fugiat at rerum voluptatibus iste eaque, iure odio, perspiciatis praesentium? Asperiores iusto temporibus sit?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

        // ------ INI PENGGANTI FIRST WHERE
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // } 
    }
}
