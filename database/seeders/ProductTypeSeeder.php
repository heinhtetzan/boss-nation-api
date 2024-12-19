<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultProductType = [
            [
                "type" => "FootWear",
                "user_id" => 1,
                'created_at' => Carbon::parse('2023-08-15T10:30:00Z'),
                'updated_at' => Carbon::parse('2024-02-18T11:15:00Z'),
            ],
            [
                "type" => "Accessories",
                "user_id" => 1,
                'created_at' => Carbon::parse('2023-08-15T10:30:00Z'),
                'updated_at' => Carbon::parse('2024-02-18T11:15:00Z'),
            ],
            [
                "type" => "Clothing",
                "user_id" => 1,
                'created_at' => Carbon::parse('2023-08-15T10:30:00Z'),
                'updated_at' => Carbon::parse('2024-02-18T11:15:00Z'),
            ]
        ];

        ProductType::insert($defaultProductType);
    }
}
