<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('posts',[
    'posts' => App\Models\Post::all()
]));

Route::get('posts/{post:slug}', fn (Post $post) => $post->body);
