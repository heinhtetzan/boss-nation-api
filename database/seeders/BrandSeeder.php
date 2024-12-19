<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'brand_name' => 'Adidas',
                'slug' => 'adidas',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Adidas_2022_logo.svg/225px-Adidas_2022_logo.svg.png',
            ],
            [
                'brand_name' => 'Nike',
                'slug' => 'nike',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg',
            ],
            [
                'brand_name' => 'Under Armour',
                'slug' => 'under-armour',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Under_armour_logo.svg/453px-Under_armour_logo.svg.png',
            ],
            [
                'brand_name' => 'H&M',
                'slug' => 'h&m',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/H%26M-Logo.svg/188px-H%26M-Logo.svg.png',
            ],
            [
                'brand_name' => 'Zara',
                'slug' => 'zara',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Zara_Logo.svg/1200px-Zara_Logo.svg.png',
            ],
            [
                'brand_name' => 'Gucci',
                'slug' => 'gucci',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/1960s_Gucci_Logo.svg/270px-1960s_Gucci_Logo.svg.png',
            ],
            [
                'brand_name' => 'Calvin Klein',
                'slug' => 'calvin-klein',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/CK_Calvin_Klein_logo.svg/722px-CK_Calvin_Klein_logo.svg.png',
            ],

        ];
        Brand::insert($brands);
    }
}
