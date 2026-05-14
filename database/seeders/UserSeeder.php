<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([

        [
            'name' => 'Azan',
            'email' => 'azan@gmail.com',
            'city' => 'Islamabad',
            'status' => 1
        ],
        [
            'name' => 'Farhan',
            'email' => 'farhan@gmail.com',
            'city' => 'Pindi',
            'status' => 1
        ],
        [
            'name' => 'Umer',
            'email' => 'umer@gmail.com',
            'city' => 'KpK',
            'status' => 0
        ],
        [
            'name' => 'Fahad',
            'email' => 'fahad@gmail.com',
            'city' => 'Islamabad',
            'status' => 1
        ]

        ]);

        $users->each(function($user){
            User::insert($user);
        });
    }
}
