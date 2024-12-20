<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'desktop_ads' => 'Desktop Ad 1',
                'mobile_ads' => 'Mobile Ad 1',
                'type' => 'banner',
                'user_id' => 1,  // Ensure this user ID exists in the users table
            ],
            [
                'desktop_ads' => 'Desktop Ad 2',
                'mobile_ads' => 'Mobile Ad 2',
                'type' => 'popup',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 3',
                'mobile_ads' => 'Mobile Ad 3',
                'type' => 'banner',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 4',
                'mobile_ads' => 'Mobile Ad 4',
                'type' => 'video',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 5',
                'mobile_ads' => 'Mobile Ad 5',
                'type' => 'banner',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 6',
                'mobile_ads' => 'Mobile Ad 6',
                'type' => 'popup',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 7',
                'mobile_ads' => 'Mobile Ad 7',
                'type' => 'banner',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 8',
                'mobile_ads' => 'Mobile Ad 8',
                'type' => 'video',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 9',
                'mobile_ads' => 'Mobile Ad 9',
                'type' => 'popup',
                'user_id' => 1,
            ],
            [
                'desktop_ads' => 'Desktop Ad 10',
                'mobile_ads' => 'Mobile Ad 10',
                'type' => 'banner',
                'user_id' => 1,
            ],
        ];

        Banner::insert($banners);

    }
}
