<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Get the data from the request
        $name = $request->input('name');

        // Create a new Post instance and put the requested data to the corresponding column
        $post = new Post();
        $post->name = $name;

        // Save the data
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $post = Post::all()->find($id);
        $posts = $post->posts();

        return view('posts.show', [
            'post' => $post,
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $post = Post::all()->find($id);

        return view('posts.index', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // Get the data from the request
        $name = $request->input('name');

        // Find the requested category and put the requested data to the corresponding column
        $post = Post::all()->find($id);
        $post->name = $name;

        // Save the data
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $post = Post::all()->find($id);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
