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
            'email' => 'azan@gmail.com'
        ],
        [
            'name' => 'Farhan',
            'email' => 'farhan@gmail.com'
        ],
        [
            'name' => 'Umer',
            'email' => 'umer@gmail.com'
        ],
        [
            'name' => 'Fahad',
            'email' => 'fahad@gmail.com'
        ]

        ]);

        $users->each(function($user){
            User::insert($user);
        });
    }
}
