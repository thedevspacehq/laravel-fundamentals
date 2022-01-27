<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($slug)
    {
        //get the requested tag
        $tag = Tag::where('slug', $slug)->firstOrFail();

        //get the posts with that tag
        $posts = $tag->posts()
            ->where('is_published',true)
            ->orderBy('id','desc')
            ->paginate(1);

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //return the data to the corresponding view
        return view('tag', [
            'tag' => $tag,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
