<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('posts'));

Route::get('posts/{post}', fn ($post) => $post);
