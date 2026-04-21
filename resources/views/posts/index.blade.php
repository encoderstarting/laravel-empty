<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Посты</title>
</head>
<body class="bg-gray-50 text-gray-900">
    <div class="min-h-screen">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-semibold tracking-tight">Все посты</h1>
                    <p class="mt-1 text-sm text-gray-600">Лента публикаций в минималистичном стиле.</p>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ url('/') }}" class="inline-flex items-center px-4 py-2 rounded-xl border border-gray-200 bg-white text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        На главную
                    </a>
                    <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 rounded-xl bg-indigo-600 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                        Создать пост
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="mt-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">
                    {{ session('success') }}
                </div>
            @endif

            @if ($posts->isEmpty())
                <div class="mt-10 rounded-2xl border border-dashed border-gray-200 bg-white p-10 text-center">
                    <p class="text-sm text-gray-600">Пока нет постов.</p>
                    <div class="mt-4">
                        <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 rounded-xl bg-indigo-600 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                            Создать первый пост
                        </a>
                    </div>
                </div>
            @else
                <div class="mt-8 grid grid-cols-1 gap-4">
                    @foreach ($posts as $post)
                        <article class="group rounded-2xl border border-gray-200 bg-white p-5 shadow-sm hover:shadow-md transition">
                            <div class="flex items-start justify-between gap-4">
                                <div class="min-w-0">
                                    <div class="flex items-center gap-2 text-xs text-gray-500">
                                        <span class="inline-flex items-center rounded-full bg-gray-100 px-2 py-1 font-medium text-gray-700">
                                            {{ $post->user->name }}
                                        </span>
                                    </div>

                                    <h2 class="mt-2 text-lg sm:text-xl font-semibold tracking-tight text-gray-900">
                                        <a href="{{ route('posts.show', $post) }}" class="hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 rounded-md">
                                            {{ $post->title }}
                                        </a>
                                    </h2>

                                    <p class="mt-2 text-sm text-gray-600"
                                       style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                                        {{ $post->content }}
                                    </p>
                                </div>

                                <div class="shrink-0">
                                    <form action="{{ route('posts.pin', $post) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="inline-flex items-center justify-center h-10 w-10 rounded-xl border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition" title="Закрепить">
                                            <span class="sr-only">Закрепить</span>
                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                                <path d="M9 3h6l1 6-2 2v7l-2-2-2 2v-7l-2-2 1-6z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                <div class="flex flex-wrap items-center gap-2">
                                    <a href="{{ route('posts.show', $post) }}" class="inline-flex items-center px-4 py-2 rounded-xl bg-gray-900 text-white text-sm font-semibold hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 transition">
                                        Открыть
                                    </a>
                                    <a href="{{ route('posts.edit', $post) }}" class="inline-flex items-center px-4 py-2 rounded-xl border border-gray-200 bg-white text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                                        Редактировать
                                    </a>
                                </div>

                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-4 py-2 rounded-xl border border-red-200 bg-red-50 text-sm font-semibold text-red-700 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition">
                                        Удалить
                                    </button>
                                </form>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-8">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>
