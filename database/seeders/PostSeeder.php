<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([

            [
                'title' => "New Tittle One",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle two",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'status' => 0,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle three",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle four",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle five",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'status' => 0,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle six",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle seven",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle eight",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle nine",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'status' => 0,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle ten",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle eleven",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle twelve",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle thirteen",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        $posts->each(function($post){
            Post::insert($post);
        });

    }
}
