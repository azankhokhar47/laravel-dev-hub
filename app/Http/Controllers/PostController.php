<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::withWhereHas("user",function($query){
           $query->active();
        })
        ->get();
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post_title = "this is another testing";
        Post::created([
            'title' => $post_title,
            'description' => "A post shares ideas, stories, or updates, engaging people, expressing thoughts clearly, and connecting audiences through meaningful, interesting, and creative content online.",
            'user_id' => 2,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
