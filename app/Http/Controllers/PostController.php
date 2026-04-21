<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        $request->user()->posts()->create($validated);
        return redirect()->route('posts.index')->with('success', 'Пост успешно создан');
    }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()->route('posts.index')->with('success', 'Пост успешно обновлен');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function about()
    {
        return view('about');
    }
    public function old_home()
    {
        return view('home');
    }
    public function hello(?string $name = null)
    {
        if ($name === null || $name === '') {
            return 'Привет!';
        }

        return "Привет, {$name}!";
    }

    public function pin(Post $post)
    {
        return redirect()->route('posts.show', $post)->with('success', 'Пост закреплен');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    

}
