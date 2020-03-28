<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
    	'title' => substr($faker->paragraph, 0, 30), 
        'slug' => Str::slug(substr($faker->paragraph, 0, 30),'-'),
        'content' => $faker->paragraph
    ];
});
