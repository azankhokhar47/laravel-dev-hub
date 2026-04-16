<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
        //  dd(DB::table('taggables')->pluck('taggable_type'));

            $post = Post::with('tags')->get();

            return $post;
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $post = Post::create([
        //     "tittle"=>"New tittle six",
        //     "discription"=>"this is best post forever"
        // ]);

        // $post= Post::find(3);

        // $post->tags()->attach([2,6]);


        // $post->tags()->create([
        //     "tag_name"=>"Subh singh",
        // ]);
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
