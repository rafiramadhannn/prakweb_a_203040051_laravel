<?php

use App\Models\Post;
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
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Rafi Ramadhan",
        "email" => "rafiramadhan711@gmail.com",
        "motivasi" => "Apapun yang kamu lakukan, selalu berikan 100 persen. Kecuali jika kamu sedang mendonorkan darah",
        "image" => "rafi.jpeg"
    ]);
});




Route::get('/blog', function () {
    return view ('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);    
});
