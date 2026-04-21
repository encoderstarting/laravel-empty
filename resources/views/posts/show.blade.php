<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="{{ route('posts.index') }}">← К списку постов</a></p>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post) }}">Редактировать</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить</button>
    </form>
    <p><a href="{{ route('old_home') }}">← На главную</a></p>
    <p><a href="{{ route('posts.index') }}">Все посты</a></p>
    <p><a href="{{ route('about') }}">О нас</a></p>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('posts.pin', $post) }}" method="POST">
        @csrf
        <button type="submit">Закрепить</button>
    </form>
    <p>Автор: {{ $post->user->name }}</p>


</body>
</html>