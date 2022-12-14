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
                "image" => "images/category/cafe.jpg",
            ],
            [
                "name" => "Restaurant",
                "image" => "images/category/restaurant.jpg",
            ],
            [
                "name" => "Hotel",
                "image" => "images/category/hotel.jpeg",
            ],
            [
                "name" => "Supermarket",
                "image" => "images/category/market.jpg",
            ],
            [
                "name" => "Bar",
                "image" => "images/category/bar.jpg",
            ],
            [
                "name" => "Pub",
                "image" => "images/category/pub.jpg",
            ],
            [
                "name" => "Food and Drink",
                "image" => "images/category/pub.jpg",
            ],
            [
                "name" => "Entertainment",
                "image" => "images/category/pub.jpg",
            ],
            [
                "name" => "Dating",
                "image" => "images/category/pub.jpg",
            ],
            [
                "name" => "Checkin",
                "image" => "images/category/pub.jpg",
            ],
        ]);
    }
}
