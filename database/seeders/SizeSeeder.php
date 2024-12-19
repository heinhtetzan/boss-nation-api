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
            ['size' => 'One Size'],
            ['size' => 'UK 12'],
            ['size' => 'UK 11.5'],
            ['size' => 'UK 11'],
            ['size' => 'UK 10.5'],
            ['size' => 'UK 10'],
            ['size' => 'UK 9.5'],
            ['size' => 'UK 9'],
            ['size' => 'UK 8.5'],
            ['size' => 'UK 8'],

        ];
        size::insert($sizes);
    }
}
