<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// membuat data dummy manual comment cara menjalankan nya
    	// php artisan db:seed --class=CommentTableSeeder
        $comments = 
        [
            [
            	'post_id' => 1,
            	'name' => 'Arman Juliansyah',
		        'email' => 'arman@gmail.com',
		        'website' => "laravel",
		        'comment' => "bagus bagus"
            ],
            [
            	'post_id' => 1,
            	'name' => 'Arman Juliansyah',
		        'email' => 'arman@gmail.com',
		        'website' => "laravel",
		        'comment' => "bagus dan keren"
            ],
        ];

        DB::table('comments')->insert($comments);
    }
}
