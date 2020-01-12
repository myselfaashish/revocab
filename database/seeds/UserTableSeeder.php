<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Aashish K',
            'email' => 'karkiaashish01'.'@gmail.com',
            'password' => bcrypt('aashish2'),
        ]);
    }
}
