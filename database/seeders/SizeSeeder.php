<?php

namespace Database\Seeders;

use App\Models\size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            ["user_id" => 1, 'size' => 'One Size'],
            ["user_id" => 1, 'size' => 'UK 12'],
            ["user_id" => 1, 'size' => 'UK 11.5'],
            ["user_id" => 1, 'size' => 'UK 11'],
            ["user_id" => 1, 'size' => 'UK 10.5'],
            ["user_id" => 1, 'size' => 'UK 10'],
            ["user_id" => 1, 'size' => 'UK 9.5'],
            ["user_id" => 1, 'size' => 'UK 9'],
            ["user_id" => 1, 'size' => 'UK 8.5'],
            ["user_id" => 1, 'size' => 'UK 8'],

        ];
        size::insert($sizes);
    }
}
