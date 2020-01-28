<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            "name" => 'Jogn Doe',
            "email" => 'demo'.rand(0, 12).'@demo.com',
            "password" => bcrypt("secret"),
        ]);
    }
}
