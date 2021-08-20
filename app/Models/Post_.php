<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post 1",
            "author" => "Sandika Galih",
            "slug" => "judul-post-1",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere veniam iure maiores nesciunt dolores quam, similique quia? Ipsam minus similique sunt nostrum, sed saepe error adipisci repudiandae amet soluta, exercitationem rerum id doloremque veniam ipsa tenetur, excepturi ex magnam et a deleniti ad eum eligendi. Culpa, tenetur beatae praesentium blanditiis nisi quia placeat, suscipit ipsa maiores consectetur officiis odit sapiente minus? Quidem in dolorum ea voluptates numquam odio similique saepe non, corrupti molestiae impedit eveniet a esse atque doloribus facere maxime laudantium velit dolores consectetur error. Hic voluptatem dicta ea veritatis sed aspernatur enim molestias! Ea cum nemo velit aspernatur."

        ],
        [
            "title" => "Judul Post 2",
            "author" => "Didin Handiman",
            "slug" => "judul-post-2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, quas, corrupti, iusto odit molestias totam optio ullam minima repudiandae vel iste deserunt cum autem temporibus amet laudantium nemo? Inventore obcaecati eius error, autem sunt fugiat dolorum ex illo amet eum perspiciatis in modi nemo esse quos laudantium delectus magni nisi alias ducimus suscipit beatae id, sint voluptates? Commodi possimus voluptates fuga. Vero accusantium consequatur veritatis in voluptatibus ea, atque inventore, autem dolore sunt laudantium! Deleniti iusto id voluptatem vero delectus, doloribus dolorem quaerat, aliquam amet quibusdam, natus rem. Ad eius a molestias recusandae inventore cum atque, voluptas, voluptates, esse officia tempora. Praesentium aut velit facere officiis quas, porro atque aspernatur provident sequi? Nisi est omnis officiis recusandae quasi, ad dolorem?"

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
    }
}
