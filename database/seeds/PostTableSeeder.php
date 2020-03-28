<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat data dummy manual comment cara menjalankan nya
    	// php artisan db:seed --class=PostTableSeeder
        $posts = 
        [
            [
            	'id' => 1,
            	'user_id' => 1,
            	'title' => 'laravel fundamental', 
		        'slug' => 'laravel-fundamental',
		        'content' => 'belajar laravel fundamental'
            ]
        ];

        DB::table('posts')->insert($posts);
    }
}
