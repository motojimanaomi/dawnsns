<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'post' => 'ハロー',
                'created_at' => '2021-3-1 18:38:48',
                'updated_at' => '2021-3-1 18:38:48',
            ],
            [
                'user_id' => 2,
                'post' => 'こんにちは',
                'created_at' => '2021-5-10 16:00:48',
                'updated_at' => '2021-5-10 16:00:48',
            ],
            [
                'user_id' => 2,
                'post' => 'こんばんは',
                'created_at' => '2021-5-10 20:00:48',
                'updated_at' => '2021-5-10 20:00:48',
            ],
        ]);
    }
}
