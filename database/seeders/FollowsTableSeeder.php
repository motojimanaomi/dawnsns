<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            [
                'user_id' => 1,
                'follower_id' => 2,
                'created_at' => '2021-5-10 20:38:48',
            ],
            [
                'user_id' => 2,
                'follower_id' => 1,
                'created_at' => '2021-3-1 20:00:48',
            ],
            [
                'user_id' => 3,
                'follower_id' => 2,
                'created_at' => '2021-7-20 15:00:48',
            ],
        ]);
    }
}
