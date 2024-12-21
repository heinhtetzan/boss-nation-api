<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'user_id' => 1,
                'desktop_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Adidas_2022_logo.svg/225px-Adidas_2022_logo.svg.png',
                'mobile_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Adidas_2022_logo.svg/225px-Adidas_2022_logo.svg.png',
            ],
            [
                'user_id' => 1,

                'desktop_image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg',
                'mobile_image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg',
            ],
            [
                'user_id' => 1,

                'desktop_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Under_armour_logo.svg/453px-Under_armour_logo.svg.png',
                'mobile_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Under_armour_logo.svg/453px-Under_armour_logo.svg.png',
            ],


        ];
        Slider::insert($sliders);
    }
}
