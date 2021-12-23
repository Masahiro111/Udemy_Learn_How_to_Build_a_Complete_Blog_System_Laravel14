<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->withCount('comments')->paginate(10);

        $recent_posts = Post::latest()->take(5)->get();

        // return view('home', [
        //     'posts' => $posts
        // ]);

        return view('home', compact('posts', 'recent_posts'));
    }
}
