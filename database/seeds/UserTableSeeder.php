<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = 
        [
            [
            	'id' => 1,
            	'name' => 'Arman Juliansyah',
		        'email' => 'arman@gmail.com',
		        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
		        'remember_token' => Str::random(10),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
