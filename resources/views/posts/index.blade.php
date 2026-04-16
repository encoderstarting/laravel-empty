<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Посты</title>
</head>
<body>
    <h1>Все посты</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <p><a href="{{ route('posts.create') }}">Создать пост</a></p>

    @if ($posts->isEmpty())
        <p>Пока нет постов.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    — <a href="{{ route('posts.edit', $post) }}">Редактировать</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Удалить</button>
                    </form>
                    <form action="{{ route('posts.pin', $post) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Закрепить</button>
                    </form>
                </li>
            @endforeach
        </ul>
        {{ $posts->links() }}
    @endif

    <p><a href="{{ url('/') }}">На главную</a></p>
</body>
</html>
