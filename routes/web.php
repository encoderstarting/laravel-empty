<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'home']);
Route::get('/about', [PostController::class, 'about'])->name('about');
Route::get('/old-home', [PostController::class, 'old_home'])->name('old_home');
Route::get('/hello/{name?}', [PostController::class, 'hello'])->name('hello');
Route::post('/posts/{post}/pin', [PostController::class, 'pin'])->name('posts.pin');

Route::resource('posts', PostController::class);



