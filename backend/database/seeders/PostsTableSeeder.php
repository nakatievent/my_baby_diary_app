<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // postsテーブルにデータをinsert
        DB::table('posts')->insert([
            [
            'picture' => 'null',
            'title' => 'みゆちゃん',
            'diary' => 'サンプルサンプルサンプルサンプルサンプル'
            ],
            [
            'picture' => 'null',
            'title' => 'みゆちゃんが保育園に行った',
            'diary' => '今日はみゆちゃんが初めて保育園に通いました'
            ],
        ]);
    }
}
