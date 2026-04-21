<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'home'])->name('home');
    Route::get('/about', [PostController::class, 'about'])->name('about');
    Route::get('/old-home', [PostController::class, 'old_home'])->name('old_home');
    Route::get('/hello/{name}', [PostController::class, 'hello'])
    ->whereAlpha('name')
    ->name('hello');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')
    ->whereNumber('post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')
    ->whereNumber('post');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')
    ->whereNumber('post');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')
    ->whereNumber('post');
    Route::post('/posts/{post}/pin', [PostController::class, 'pin'])->name('posts.pin')
    ->whereNumber('post');
});
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

require __DIR__.'/auth.php';


