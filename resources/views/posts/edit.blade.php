<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование</title>
</head>
<body>
    <p><a href="{{ route('posts.show', $post) }}">← К посту</a></p>
    <h1>Редактировать пост</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('put')
        <div>
            <input type="text" name="title" placeholder="Название" value="{{ old('title', $post->title) }}" required>
        </div>
        <div>
            <textarea name="content" placeholder="Содержимое" required>{{ old('content', $post->content) }}</textarea>
        </div>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
