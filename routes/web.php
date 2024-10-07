<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\PostController::class,'index'])->name('posts.index');

Route::get('/posts/bycat/{category}', [PostController::class,'postsByCat'])->name('posts.bycat');
