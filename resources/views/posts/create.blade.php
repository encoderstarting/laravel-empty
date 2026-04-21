<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="{{ route('posts.index') }}">← К списку</a></p>
    <h1>Создание поста</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Название поста" value="{{ old('title') }}" required minlength="3">
        </div>
        <div>
            <textarea name="content" placeholder="Содержимое (минимум 10 символов)" required minlength="10">{{ old('content') }}</textarea>
        </div>
        <button type="submit">Создать пост</button>
        <p><a href="{{ route('about') }}">← О проекте</a></p>
        <p><a href="{{ route('posts.index') }}">← Все посты</a></p>
        
    </form>
</body>
</html>