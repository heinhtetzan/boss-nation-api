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
            ["user_id" => 1, 'fit' => 'Slim'],
            ["user_id" => 1, 'fit' => 'Regular'],
            ["user_id" => 1, 'fit' => 'Plus Size'],
            ["user_id" => 1, 'fit' => 'XL'],
            ["user_id" => 1, 'fit' => '2XL'],
            ["user_id" => 1, 'fit' => '3XL'],
        ];
        Fit::insert($fits);
    }
}
