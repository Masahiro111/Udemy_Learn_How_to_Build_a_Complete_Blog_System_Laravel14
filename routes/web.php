<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagController;
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

// Route::get('getpost', function () {
//     $post =  Post::find(2);

//     return $post->image;
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/posts/{post:slug}', [PostsController::class, 'addComment'])->name('posts.add_comment');

Route::get('/about', AboutController::class)->name('about');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/tags/{tag:slug}', [TagController::class, 'show'])->name('tags.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
