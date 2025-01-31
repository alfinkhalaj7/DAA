<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password123'),
            'level' => 'admin',
        ]);

        User::create([
            'name' => 'User1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password123'),
            'level' => 'user',
        ]);
    }
}