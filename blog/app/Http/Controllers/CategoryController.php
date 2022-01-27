<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug)
    {
        //get the requested category
        $category = Category::where('slug', $slug)->firstOrFail();

        //get the posts in that category
        $posts = $category->posts()
            ->where('is_published',true)
            ->orderBy('id','desc')
            ->paginate(1);

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //return the data to the corresponding view
        return view('category', [
            'category' => $category,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
