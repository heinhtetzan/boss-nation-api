<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["user_id" => 1, 'category_name' => 'Jacket', 'slug' => 'jacket'],
            ["user_id" => 1, 'category_name' => 'T Shirt', 'slug' => 't-shirt'],
            ["user_id" => 1, 'category_name' => 'Polo Shirt', 'slug' => 'polo-shirt'],
        ];
    }
}
