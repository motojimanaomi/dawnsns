<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
             [
                'name' => '一郎',
                'email' => 'ichirou@mail.com',
                'password' => Hash::make('ichirou11'),
                'bio' => '',
                'image' => '',
                'created_at' => '2021-3-1 18:35:48',
                'updated_at' => '2021-3-1 18:35:48',
            ],
            [
                'name' => '二郎',
                'email' => 'jirou@mail.com',
                'password' => Hash::make('jirou22'),
                'bio' => '',
                'image' => '',
                'created_at' => '2021-5-10 15:57:21',
                'updated_at' => '2021-5-10 15:57:21',
            ],
            [
                'name' => '三郎',
                'email' => 'saburou@mail.com',
                'password' => Hash::make('saburou33'),
                'bio' => '',
                'image' => '',
                'created_at' => '2021-7-20 10:19:34',
                'updated_at' => '2021-7-20 10:19:34',
            ],
        ]);
    }
}
