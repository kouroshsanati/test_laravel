<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


Route::get('/', function () {
    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) {
    // find a post its slug and pass it to a view called "post"

    return view('post', [
        'post' => Post::find($slug)
    ]);


})->where('post', '[A-z_\-]+');


// add comment
