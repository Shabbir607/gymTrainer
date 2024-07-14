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
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'), // Change 'password' to the desired password
            'phone' => '1111', // Optional: Adjust as needed
            'role_id' => 1, // Assuming role_id 1 is for admin
            'profile_picture' => null, // Optional: Adjust as needed
        ]);
    }
}
