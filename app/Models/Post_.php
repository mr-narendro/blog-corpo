<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Alif',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Deleniti quae, aut ipsam officia vel itaque blanditiis temporibus qui quia alias corporis ut iure quam, iste nisi cumque! Perferendis, voluptatibus minima. Temporibus ex error quaerat itaque nisi,
            obcaecati praesentium doloribus fugit quisquam deleniti
            ipsam aliquam porro architecto sunt iure magni corporis,
            dolorem ad exercitationem maiores? Officiis totam explicabo maiores. Ab esse earum officiis quod culpa perferendis quasi quae odio, reiciendis veritatis blanditiis praesentium corrupti, quidem, fugit nemo deleniti in iure. Sit!',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Narendro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Deleniti quae, aut ipsam officia vel itaque blanditiis temporibus qui quia alias corporis ut iure quam, iste nisi cumque! Perferendis, voluptatibus minima. Temporibus ex error quaerat itaque nisi,
            obcaecati praesentium doloribus fugit quisquam deleniti
            ipsam aliquam porro architecto sunt iure magni corporis,
            dolorem ad exercitationem maiores? Officiis totam explicabo maiores. Ab esse earum officiis quod culpa perferendis quasi quae odio, reiciendis veritatis blanditiis praesentium corrupti, quidem, fugit nemo deleniti in iure. Sit!',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function self($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
