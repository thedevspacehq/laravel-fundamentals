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
            'posts' => $posts,
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
        $title = $request->input('title');
        $content = $request->input('content');

        // Create a new Post instance and put the requested data to the corresponding column
        $post = new Post;
        $post->title = $title;
        $post->content = $content;

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

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $post = Post::all()->find($id);

        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // Get the data from the request
        $title = $request->input('title');
        $content = $request->input('content');

        // Find the requested post and put the requested data to the corresponding column
        $post = Post::all()->find($id);
        $post->title = $title;
        $post->content = $content;

        // Save the data
        $post->save();

        return redirect()->route('posts.show', ['post' => $id]);
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
