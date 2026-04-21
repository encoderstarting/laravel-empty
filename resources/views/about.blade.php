<!DOCTYPE html>
<html lang="ru" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О проекте — блог</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-full antialiased text-slate-800 bg-gradient-to-br from-slate-50 via-white to-indigo-50">
    <div class="relative isolate min-h-full overflow-hidden">
        <div class="pointer-events-none absolute inset-0 -z-10 opacity-40" aria-hidden="true">
            <div class="absolute -left-28 top-20 h-72 w-72 rounded-full bg-indigo-300/30 blur-3xl"></div>
            <div class="absolute -right-20 bottom-32 h-80 w-80 rounded-full bg-violet-300/25 blur-3xl"></div>
        </div>

        <header class="border-b border-slate-200/80 bg-white/70 backdrop-blur-md">
            <div class="mx-auto flex max-w-3xl flex-wrap items-center justify-between gap-3 px-4 py-4 sm:px-6 lg:px-8">
                <span class="inline-flex items-center gap-2 rounded-full border border-slate-200/80 bg-white/90 px-3 py-1 text-xs font-medium text-slate-600 shadow-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-indigo-500"></span>
                    О проекте
                </span>
                <nav class="flex flex-wrap items-center gap-2 text-sm">
                    <a href="{{ route('old_home') }}" class="inline-flex items-center gap-1.5 rounded-lg px-3 py-2 font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        На главную
                    </a>
                    <a href="{{ route('posts.index') }}" class="inline-flex items-center rounded-lg bg-slate-900 px-3 py-2 font-medium text-white shadow-sm transition hover:bg-slate-800">
                        Все посты
                    </a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8">
            <div class="text-center">
                <h1 class="text-balance text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">
                    О проекте
                </h1>
                <p class="mx-auto mt-4 max-w-xl text-pretty text-base leading-relaxed text-slate-600">
                    Этот проект создан для того, чтобы вы могли писать посты и делиться ими с другими пользователями.
                </p>
            </div>

            <ul class="mt-12 space-y-4" role="list">
                <li class="rounded-2xl border border-slate-200/90 bg-white/90 p-5 shadow-sm ring-1 ring-slate-900/5">
                    <div class="flex gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sky-100 text-sky-700">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 10.5 12 3m0 0 7 7.5M12 3v18" />
                            </svg>
                        </span>
                        <p class="text-sm leading-relaxed text-slate-700">
                            Вы можете закрепить посты, чтобы они были наверху списка.
                        </p>
                    </div>
                </li>
                <li class="rounded-2xl border border-slate-200/90 bg-white/90 p-5 shadow-sm ring-1 ring-slate-900/5">
                    <div class="flex gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </span>
                        <p class="text-sm leading-relaxed text-slate-700">
                            Вы можете редактировать и удалять свои посты.
                        </p>
                    </div>
                </li>
                <li class="rounded-2xl border border-slate-200/90 bg-white/90 p-5 shadow-sm ring-1 ring-slate-900/5">
                    <div class="flex gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-100 text-violet-700">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>
                        <p class="text-sm leading-relaxed text-slate-700">
                            Вы можете посмотреть все посты и найти то, что вам нужно.
                        </p>
                    </div>
                </li>
                <li class="rounded-2xl border border-slate-200/90 bg-white/90 p-5 shadow-sm ring-1 ring-slate-900/5">
                    <div class="flex gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-100 text-amber-800">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </span>
                        <p class="text-sm leading-relaxed text-slate-700">
                            Вы можете писать посты о своих интересах, о своей жизни, о своей работе и т.д.
                        </p>
                    </div>
                </li>
            </ul>
        </main>

        <footer class="border-t border-slate-200/80 bg-white/50 py-8 text-center text-sm text-slate-500">
            <p>Laravel · Blade · Tailwind CSS</p>
        </footer>
    </div>
</body>
</html>
