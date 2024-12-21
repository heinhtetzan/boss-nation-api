<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coupon = [
            ["title" => "New Year Sale", "code" => "NY2024SAVE", "discount" => 20, "expire_date" => "2024-01-31", "user_id" => 1],
            ["title" => "Valentine's Discount", "code" => "LOVE2024", "discount" => 25, "expire_date" => "2024-02-14", "user_id" => 1],
            ["title" => "Spring Savings", "code" => "SPRING2024", "discount" => 15, "expire_date" => "2024-04-30", "user_id" => 1],
            ["title" => "Summer Special", "code" => "SUMMER2024", "discount" => 30, "expire_date" => "2024-06-30", "user_id" => 1],
            ["title" => "Back to School", "code" => "SCHOOL2024", "discount" => 10, "expire_date" => "2024-08-31", "user_id" => 1],
            ["title" => "Halloween Treat", "code" => "SPOOKY2024", "discount" => 40, "expire_date" => "2024-10-31", "user_id" => 1],
            ["title" => "Black Friday Deal", "code" => "BLACKFRIDAY", "discount" => 50, "expire_date" => "2024-11-29", "user_id" => 1],
            ["title" => "Cyber Monday Offer", "code" => "CYBER2024", "discount" => 45, "expire_date" => "2024-12-02", "user_id" => 1],
            ["title" => "Christmas Special", "code" => "XMAS2024", "discount" => 35, "expire_date" => "2024-12-25", "user_id" => 1],
            ["title" => "End of Year Sale", "code" => "YEAREND2024", "discount" => 50, "expire_date" => "2024-12-31", "user_id" => 1],
            ["title" => "Weekend Offer", "code" => "WEEKEND2024", "discount" => 12, "expire_date" => "2024-03-01", "user_id" => 1],
            ["title" => "Festival Bonanza", "code" => "FESTIVAL2024", "discount" => 28, "expire_date" => "2024-05-15", "user_id" => 1],
            ["title" => "Shopping Spree", "code" => "SHOP2024", "discount" => 18, "expire_date" => "2024-07-01", "user_id" => 1],
            ["title" => "Holiday Sale", "code" => "HOLIDAY2024", "discount" => 22, "expire_date" => "2024-09-15", "user_id" => 1],
            ["title" => "Early Bird Offer", "code" => "EARLY2024", "discount" => 35, "expire_date" => "2024-10-10", "user_id" => 1]
        ];

        Coupon::insert($coupon);
    }
}
