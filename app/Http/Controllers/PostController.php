<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        //get the requested post, if it is published
        $post = Post::query()
            ->where('is_published', true)
            ->where('slug', $slug)
            ->firstOrFail();

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        //return the data to the corresponding view
        return view('post', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts,
        ]);
    }
}
