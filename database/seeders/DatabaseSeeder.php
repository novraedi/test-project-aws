<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(3)->create();

        Category::create(['name'=>'Web Programming',
        'slug'=>'web-programming']);
        Category::create(['name'=>'Personal',
        'slug'=>'personal']);
        Category::create(['name'=>'Web Design',
        'slug'=>'web-design']);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Jabriq',
        //     'email' => 'Jabriq@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'duar',
        //     'email' => 'duar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title'=>'Judul Pertama', 
        //     'category_id'=>1, 
        //     'slug'=> 'judul-pertama', 
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis at lacus sagittis scelerisque. Ut in urna vel ante rhoncus consectetur.', 
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis at lacus sagittis scelerisque. Ut in urna vel ante rhoncus consectetur. Nunc at leo ut ligula bibendum gravida. Proin nec justo eget justo dictum venenatis. Nullam vestibulum elit in justo ultricies, vel congue purus pharetra. Vestibulum aliquet, turpis nec imperdiet vestibulum, nisl ante convallis lectus, non posuere justo tortor in ipsum. Mauris vel justo ut turpis ullamcorper scelerisque vel nec libero. Nulla facilisi. Curabitur auctor fermentum turpis, non efficitur elit ultrices at. Sed vel arcu nec urna rhoncus feugiat eget in metus. Suspendisse vel eros vel eros posuere auctor. Sed ac accumsan nisi. Sed nec augue id odio dapibus tincidunt. Integer consectetur elit eget orci facilisis, vel suscipit odio convallis. Sed quis libero nec lectus tincidunt facilisis. Nunc vel justo id nisi vulputate malesuada. Vivamus feugiat, turpis ac cursus posuere, nunc leo convallis arcu, vel varius nisi odio a elit.',
        //     'user_id' => 1]);
        // Post::create([
        //     'title'=>'Judul Kedua', 
        //     'category_id'=>2, 
        //     'slug'=> 'judul-kedua', 
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis at lacus sagittis scelerisque. Ut in urna vel ante rhoncus consectetur.', 
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis at lacus sagittis scelerisque. Ut in urna vel ante rhoncus consectetur. Nunc at leo ut ligula bibendum gravida. Proin nec justo eget justo dictum venenatis. Nullam vestibulum elit in justo ultricies, vel congue purus pharetra. Vestibulum aliquet, turpis nec imperdiet vestibulum, nisl ante convallis lectus, non posuere justo tortor in ipsum. Mauris vel justo ut turpis ullamcorper scelerisque vel nec libero. Nulla facilisi. Curabitur auctor fermentum turpis, non efficitur elit ultrices at. Sed vel arcu nec urna rhoncus feugiat eget in metus. Suspendisse vel eros vel eros posuere auctor. Sed ac accumsan nisi. Sed nec augue id odio dapibus tincidunt. Integer consectetur elit eget orci facilisis, vel suscipit odio convallis. Sed quis libero nec lectus tincidunt facilisis. Nunc vel justo id nisi vulputate malesuada. Vivamus feugiat, turpis ac cursus posuere, nunc leo convallis arcu, vel varius nisi odio a elit.',
        //     'user_id' => 2]);
    }
}
