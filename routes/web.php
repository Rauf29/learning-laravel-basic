<?php

use App\Models\Category;
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


// Route::get('/', function () {

//     $posts = Post::all();
//     ddd($posts[1])
//     return view('posts',[
//         'posts' => $posts
//     ]);
// });



// Route::get('posts/{post}', function ($slug) {

//     //  Find a post by its slug and pass it to a called "post"

//     return view('post', [
//         'post' => Post::find($slug)
//     ]);

// })->where('post', '[A-z-_/]+');


Route::get('/', function () {

    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

// Route::get('posts/{post}', function (Post $post) {
//     return view('post', [
//         'post' => $post
//     ]);
// }); i can use this for id

Route::get('categories/{category:slug}' , function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}' , function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});
