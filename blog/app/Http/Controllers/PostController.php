<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        //get the requested post, if it is published
        $post = Post::where('is_published', true)->where('slug', $slug)->firstOrFail();

        //get all the tags for this post
        $post_tags = $post->tags;

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //related posts
        $related_posts = Post::where('is_published', true)->whereHas('tags', function (Builder $query) use ($post) {
            return $query->whereIn('name', $post->tags->pluck('name'));
        })->where('id', '!=', $post->id)->take(3)->get();

        //return the data to the corresponding view
        return view('post', [
            'post' => $post,
            'post_tags' => $post_tags,
            'categories' => $categories,
            'tags' => $tags,
            'related_posts' => $related_posts
        ]);
    }

    public function search(Request $request)
    {
        // get the search term from the request
        $key = $request->input('query');

        $posts = Post::where('title', 'like', "%{$key}%")
            ->orderBy('id', 'desc')
            ->paginate(1);

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        return view('search', [
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
