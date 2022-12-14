<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "name" => "Caffee",
            ],
            [
                "name" => "Restaurant",
            ],
            [
                "name" => "Hotel",
            ],
            [
                "name" => "Supermarket",
            ],
            [
                "name" => "Bar",
            ],
            [
                "name" => "Pub",
            ],
        ]);
    }
}
