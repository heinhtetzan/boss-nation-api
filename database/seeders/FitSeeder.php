<?php

namespace Database\Seeders;

use App\Models\Fit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fits  = [
            ["user_id" => 1, 'name' => 'Slim'],
            ["user_id" => 1, 'name' => 'Regular'],
            ["user_id" => 1, 'name' => 'Plus Size'],
            ["user_id" => 1, 'name' => 'XL'],
            ["user_id" => 1, 'name' => '2XL'],
            ["user_id" => 1, 'name' => '3XL'],
        ];
        Fit::insert($fits);
    }
}
