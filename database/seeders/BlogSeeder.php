<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                "name" => "Cafe Ngon Đà Nẵng",
                "description" => "quản giải khát chất lượng cao, giá rẻ",
                "address" => "abc, Trần Cao Vân, Đà Nẵng",
                "user_id" => 1,
                "category_id" => 1,
            ],
            [
                "name" => "Cafe Ngon Đà Nẵng",
                "description" => "quản giải khát chất lượng cao, giá rẻ",
                "address" => "abc, Trần Cao Vân, Đà Nẵng",
                "user_id" => 2,
                "category_id" => 2,
            ],
            [
                "name" => "Cafe Ngon Đà Nẵng",
                "description" => "quản giải khát chất lượng cao, giá rẻ",
                "address" => "abc, Trần Cao Vân, Đà Nẵng",
                "user_id" => 3,
                "category_id" => 3,
            ],
        ]);
    }
}
