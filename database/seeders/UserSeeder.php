<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Ali Khan',
            'email' => 'ali@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Ahmed Raza',
            'email' => 'ahmed@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Sara Ali',
            'email' => 'sara@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}