<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {
    // find a post its slug and pass it to a view called "post"

    return view('post', [
        'post' => Post::find($slug)
    ]);


})->where('post', '[A-z_\-]+');

//asdkjnsknfskdf

