<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // memanggil seeder manual yg kita buat
        $this->call([
            UserTableSeeder::class,
            PostTableSeeder::class,
            CommentTableSeeder::class,
        ]);

        // membuat data dummy otomatis menggunakan factory faker
        // user beserta post beserta comment nya cara menjalankan nya
        // php artisan db:seed
        $jumlahData = 10;
        factory(App\User::class,  $jumlahData)->create()->each(function ($user) {
	        $user->posts()->save(factory(App\Post::class)->make())->each(function ($post) {
	        	$post->comments()->save(factory(\App\Comment::class)->make());
	        });
	    });
    }
}
