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
                'slug' => "new-tittle-one",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle two",
                'slug' => "new-tittle-two",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle three",
                'slug' => "new-tittle-three",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle four",
                'slug' => "new-tittle-four",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle five",
                'slug' => "new-tittle-five",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle six",
                'slug' => "new-tittle-six",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle seven",
                'slug' => "new-tittle-seven",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle eight",
                'slug' => "new-tittle-eight",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle nine",
                'slug' => "new-tittle-nine",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle ten",
                'slug' => "new-tittle-ten",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle eleven",
                'slug' => "new-tittle-eleven",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle twelve",
                'slug' => "new-tittle-twelve",
                'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Tittle thirteen",
                'slug' => "new-tittle-thirteen",
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
