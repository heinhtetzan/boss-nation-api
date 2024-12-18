<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'POS Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('asdffdsa'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
