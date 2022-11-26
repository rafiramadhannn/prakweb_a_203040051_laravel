<?php

namespace Database\Seeders;
use Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     
        // User::create([
        //    'name' => 'Rafi Ramadhan',
        //    'email' => 'rafiramadhan711@gmail.com',
        //    'password' => 'bcrypt('12345')'
        // ]);
    
  
     public function run()
    {
        User::create([
           'name' => 'Rafi Ramadhan',
           'username' => 'admin',
           'email' => 'rafiramadhan711@gmail.com',
           'password' => Hash::make('password')
        ]);

       User::factory(4)->create();

       Category::create([
           'name' => 'Rafi Ramadhan',
           'slug' => 'rafi-ramadhan'
       ]);

       Category::create([
           'name' => 'Sapardi Djoko Damono',
           'slug' => 'sapardi-djoko-damono'
       ]);

       Category::create([
        'name' => 'Chairil Anwar',
        'slug' => 'chairil-anwar'
    ]);

    Category::create([
        'name' => 'Widji Thukul',
        'slug' => 'whidji-thukul'
    ]);

       Post::factory(15)->create();
    }
}
