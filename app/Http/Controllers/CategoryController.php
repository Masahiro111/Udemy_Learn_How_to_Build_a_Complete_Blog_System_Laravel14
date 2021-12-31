<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    }

    public function show(Category $category)
    {

        $recent_posts = Post::latest()->take(5)->get();
        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(20)->get();

        return view('categories.show', [
            'posts' => $categories,
            'recent_posts' => $recent_posts,
            'category' => $category,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}
