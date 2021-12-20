<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/insert_comments', function () {
//     $comment = Comment::create([
//         'comment' => 'This is a trial third comment',
//         'post_id' => 1,
//         'user_id' => 1,
//     ]);

//     $post = Post::find(1);
//     return $post->comments;
// });

// Route::get('/user', function () {
// $comment = Comment::find(1);
// dd($comment->user);

//     $user = User::find(1);
//     return $user->comments;
// });


// Route::get('createpost', function () {
//     $post = Post::create([
//         'title' => 'This is post title',
//         'excerpt' => 'This is exerpt',
//         'slug' => 'This is slug',
//         'body' => 'This is content',
//         'user_id' => 1,
//         'category_id' => Category::find(1)->id,
//     ]);

//     $post->image()->create([
//         'name' => 'random file',
//         'extension' => 'jpg',
//         'path' => '/image/randam_file.jpg'
//     ]);
// });

// Route::get('createpostimage', function () {
//     $user =  User::find(1);

//     $user->image()->create([
//         'name' => 'random file for user',
//         'extension' => 'jpg',
//         'path' => '/image/randam_file.jpg'
//     ]);
// });

Route::get('getpost', function () {
    $post =  Post::find(2);

    return $post->image;
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
