<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display the home page
     */
    public function home(): View
    {
        $posts = Post::paginate(15);
        $categories = Category::all();
        $tags = Tag::all();

        return view('home', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

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
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.create', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Get the data from the request
        $title = $request->input('title');
        $content = $request->input('content');

        if ($request->input('is_published') == 'on') {
            $is_published = true;
        } else {
            $is_published = false;
        }

        // Create a new Post instance and put the requested data to the corresponding column
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->is_published = $is_published;

        // Save the cover image
        $path = $request->file('cover')->store('cover', 'public');
        $post->cover = $path;

        // Set user
        $user = Auth::user();
        $post->user()->associate($user);

        // Set category
        $category = Category::find($request->input('category'));
        $post->category()->associate($category);

        // Save post
        $post->save();

        //Set tags
        $tags = $request->input('tags');

        foreach ($tags as $tag) {
            $post->tags()->attach($tag);
        }

        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $post = Post::all()->find($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.edit', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $post = Post::all()->find($id);

        // Get the data from the request
        $title = $request->input('title');
        $content = $request->input('content');

        if ($request->input('is_published') == 'on') {
            $is_published = true;
        } else {
            $is_published = false;
        }

        // Update post info
        $post->title = $title;
        $post->content = $content;
        $post->is_published = $is_published;

        // Save the cover image (if updated)
        if ($request->file('cover')) {
            $path = $request->file('cover')->store('cover', 'public');
            $post->cover = $path;
        }

        // Update category
        $category = Category::find($request->input('category'));
        $post->category()->associate($category);

        // Save post
        $post->save();

        // Detach all tags
        $post->tags()->detach();

        //Set tags
        $tags = $request->input('tags');

        foreach ($tags as $tag) {
            $post->tags()->attach($tag);
        }

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
