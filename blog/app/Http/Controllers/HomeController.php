<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class HomeController extends Controller
{
    // Display the homepage
    public function show()
    {
        //get the posts that are published, sort by decreasing order of "id".
        $posts = Post::where('is_published', true)->orderBy('id', 'desc')->paginate(1);

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        return view('home', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
