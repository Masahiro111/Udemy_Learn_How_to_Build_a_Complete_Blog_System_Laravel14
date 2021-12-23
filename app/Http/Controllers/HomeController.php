<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->withCount('comments')->paginate(10);

        // return view('home', [
        //     'posts' => $posts
        // ]);

        return view('home', compact('posts'));
    }
}
