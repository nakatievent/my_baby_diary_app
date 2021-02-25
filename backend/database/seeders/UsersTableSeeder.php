<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
    // usersテーブルにデータをinsert
        DB::table('users')->insert([
            [
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'picture' => '',
            'my_introduction' => '太郎です'
            ],
            [
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'picture' => '',
            'my_introduction' => 'hahahaです'
            ],
        ]);
    }
}
