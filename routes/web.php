<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $posts = Post::all();
    dd($posts[0]->getContents());

   /* return view('posts', [
        'posts' => $posts
    ]);*/
});

Route::get('posts/{post}', function ($slug) {
    // find a post its slug and pass it to a view called "post"

    return view('post', [
        'post' => Post::find($slug)
    ]);


})->where('post', '[A-z_\-]+');



