<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Панель управления') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl">
                <div class="p-6 sm:p-8">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div>
                            <p class="text-sm text-gray-500">{{ __('Статус') }}</p>
                            <p class="mt-1 text-lg font-semibold text-gray-900">
                                {{ __("Вы вошли в систему") }}
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-gray-900 text-black text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 transition">
                                {{ __('Все посты') }}
                            </a>
                            <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-indigo-600 text-black text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                                {{ __('Создать пост') }}
                            </a>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a href="{{ route('about') }}" class="group rounded-xl border border-gray-200 p-5 hover:border-gray-300 hover:bg-gray-50 transition">
                            <div class="text-sm font-semibold text-gray-900 group-hover:text-gray-950">
                                {{ __('О сайте') }}
                            </div>
                            <div class="mt-1 text-sm text-gray-600">
                                {{ __('Информация и контакты.') }}
                            </div>

                        </a>

                        <a href="{{ route('profile.edit') }}" class="group rounded-xl border border-gray-200 p-5 hover:border-gray-300 hover:bg-gray-50 transition">
                            <div class="text-sm font-semibold text-gray-900 group-hover:text-gray-950">
                                {{ __('Профиль') }}
                            </div>
                            <div class="mt-1 text-sm text-gray-600">
                                {{ __('Обновить данные и пароль.') }}
                            </div>
                        </a>

                        <a href="{{ route('password.request') }}" class="group rounded-xl border border-gray-200 p-5 hover:border-gray-300 hover:bg-gray-50 transition">
                            <div class="text-sm font-semibold text-gray-900 group-hover:text-gray-950">
                                {{ __('Сброс пароля') }}
                            </div>
                            <div class="mt-1 text-sm text-gray-600">
                                {{ __('Отправить ссылку на email.') }}
                            </div>
                        </a>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-between">
                        <p class="text-sm text-gray-500">
                            {{ __('Безопасность аккаунта') }}
                        </p>
                        <a href="{{ route('password.confirm') }}" class="inline-flex items-center px-4 py-2 rounded-lg border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 transition">
                            {{ __('Выйти из системы') }}
                       
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
