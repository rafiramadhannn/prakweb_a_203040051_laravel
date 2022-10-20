<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Lima",
            "slug" => "Lima",
            "author" => "Rafi Ramadhan",
            "body" => "50 detik aku benci semua orang, sisanya aku mengagumimu.
            50 langkah ingin ku tabrak semua manusia, sisanya aku mencarimu.
            55 kali aku mencaci wajah asing, sisanya aku merayumu.
            555 kali tanganku merapal mantra petaka untuk musuhmu, sisanya aku mendoakanmu.
            sedangkan tiada 5 yang cukup terurai untuk meremukkan dunia,
            sementara itu belum bermula kau berhitung sampai 5 sudah ku cintai kau tak tersisa."
        ],
    
        [
            "title" => "Aku Ingin",
            "slug" => "Aku-Ingin",
            "author" => "Sapardi Djoko Damono",
            "body" => "aku ingin mencintaimu dengan sederhana,
            dengan kata yang tak sempat diucapkan kayu kepada api yang menjadikannya abu.
            aku ingin mencintaimu dengan sederhana,
            dengan isyarat yang tak sempat disampaikan awan kepada hujan yang menjadikannya tiada."
        ]
    ];

    public static function all ()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
