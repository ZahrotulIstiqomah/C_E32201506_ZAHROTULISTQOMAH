<?php

use App\User;
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
        User::insert([
            'name' => 'zahro',
            'email' => 'zahro@gmail.com',
            'password' => bcrypt(12345678),
        ]);
    }
}