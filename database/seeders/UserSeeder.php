<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'Uchiha Madara',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'gender' => 0,
                'user_type' => 2,
                'phone' => '',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'Uchiha Itachi',
                'username' => 'poster',
                'email' => 'poster@gmail.com',
                'gender' => 0,
                'user_type' => 1,
                'phone' => '',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'Uchiha Sasuke',
                'username' => 'user01',
                'email' => 'user01@gmail.com',
                'gender' => 0,
                'user_type' => 0,
                'phone' => '',
                'password' => Hash::make('123456')
            ],
        ]);
    }
}
