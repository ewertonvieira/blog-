<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("post.index", compact("posts"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(rules: [
            'title' => 'required|string|max:255', 
            'content' => 'required|string',  
        ]);
       
        $post = new Post();
        $post->title = $request->input("title");
        $post->content = $request->input("content");
        $post->slug = $request->input('slug', Str::slug($request->input('title')));
        $post->published = 1;
        $post->published_at = now();

        $post->save();

        return redirect()->route('post.index');
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
