<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function show(Post $post)
    {

        $recent_posts = Post::latest()->take(5)->get();

        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();

        $tags = Tag::latest()->take(20)->get();

        return view('post', compact('post', 'recent_posts', 'categories', 'tags'));
    }
}
