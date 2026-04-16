<!DOCTYPE html>
<html lang="ru" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная — блог</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-full antialiased text-slate-800 bg-gradient-to-br from-slate-50 via-white to-sky-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 dark:text-slate-100">
    <div class="relative isolate min-h-full overflow-hidden">
        <div class="pointer-events-none absolute inset-0 -z-10 opacity-40 dark:opacity-25" aria-hidden="true">
            <div class="absolute -left-32 top-0 h-72 w-72 rounded-full bg-sky-300/30 blur-3xl dark:bg-sky-500/20"></div>
            <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-indigo-300/25 blur-3xl dark:bg-indigo-500/15"></div>
        </div>

        <header class="border-b border-slate-200/80 bg-white/70 backdrop-blur-md dark:border-white/10 dark:bg-slate-950/70">
            <div class="mx-auto flex max-w-5xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
                <span class="inline-flex items-center gap-2 rounded-full border border-slate-200/80 bg-white/90 px-3 py-1 text-xs font-medium text-slate-600 shadow-sm dark:border-white/10 dark:bg-slate-900/80 dark:text-slate-300">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                    Личный блог
                </span>
            </div>
        </header>

        <main class="mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h1 class="text-balance text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl dark:text-white">
                    Добро пожаловать
                </h1>
                <p class="mx-auto mt-5 max-w-lg text-pretty text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                    Читайте заметки, узнайте о проекте или перейдите к списку постов — всё в пару кликов.
                </p>
            </div>

            <ul class="mx-auto mt-14 grid max-w-3xl gap-4 sm:grid-cols-1 sm:gap-5">
                <li>
                    <a href="{{ route('posts.index') }}" class="group flex items-center justify-between gap-4 rounded-2xl border border-slate-200/90 bg-white/90 p-5 shadow-sm ring-1 ring-slate-900/5 transition hover:border-sky-300/80 hover:shadow-md hover:ring-sky-500/10 dark:border-white/10 dark:bg-slate-900/60 dark:ring-white/5 dark:hover:border-sky-500/40">
                        <span class="flex items-center gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-sky-100 text-sky-700 dark:bg-sky-500/15 dark:text-sky-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </span>
                            <span class="text-left">
                                <span class="block text-base font-medium text-slate-900 dark:text-white">Все посты</span>
                                <span class="mt-0.5 block text-sm text-slate-500 dark:text-slate-400">Список заметок и материалов</span>
                            </span>
                        </span>
                        <svg class="h-5 w-5 shrink-0 text-slate-400 transition group-hover:translate-x-0.5 group-hover:text-sky-600 dark:text-slate-500 dark:group-hover:text-sky-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="group flex items-center justify-between gap-4 rounded-2xl border border-slate-200/90 bg-white/90 p-5 shadow-sm ring-1 ring-slate-900/5 transition hover:border-indigo-300/80 hover:shadow-md hover:ring-indigo-500/10 dark:border-white/10 dark:bg-slate-900/60 dark:ring-white/5 dark:hover:border-indigo-500/40">
                        <span class="flex items-center gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-indigo-100 text-indigo-700 dark:bg-indigo-500/15 dark:text-indigo-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                            </span>
                            <span class="text-left">
                                <span class="block text-base font-medium text-slate-900 dark:text-white">О проекте</span>
                                <span class="mt-0.5 block text-sm text-slate-500 dark:text-slate-400">Идея и описание блога</span>
                            </span>
                        </span>
                        <svg class="h-5 w-5 shrink-0 text-slate-400 transition group-hover:translate-x-0.5 group-hover:text-indigo-600 dark:text-slate-500 dark:group-hover:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('hello', ['name' => 'Мир']) }}" class="group flex items-center justify-between gap-4 rounded-2xl border border-slate-200/90 bg-white/90 p-5 shadow-sm ring-1 ring-slate-900/5 transition hover:border-emerald-300/80 hover:shadow-md hover:ring-emerald-500/10 dark:border-white/10 dark:bg-slate-900/60 dark:ring-white/5 dark:hover:border-emerald-500/40">
                        <span class="flex items-center gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 dark:bg-emerald-500/15 dark:text-emerald-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.008H9.375V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.008h-.008V9.75z" />
                                </svg>
                            </span>
                            <span class="text-left">
                                <span class="block text-base font-medium text-slate-900 dark:text-white">Привет, Мир</span>
                                <span class="mt-0.5 block text-sm text-slate-500 dark:text-slate-400">Демо-маршрут с параметром</span>
                            </span>
                        </span>
                        <svg class="h-5 w-5 shrink-0 text-slate-400 transition group-hover:translate-x-0.5 group-hover:text-emerald-600 dark:text-slate-500 dark:group-hover:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </li>
            </ul>
        </main>

        <footer class="border-t border-slate-200/80 bg-white/50 py-8 text-center text-sm text-slate-500 dark:border-white/10 dark:bg-slate-950/50 dark:text-slate-500">
            <p>Сделано на Laravel · Blade · Tailwind CSS</p>
        </footer>
    </div>
</body>
</html>
