# Laravel-блог (учебный проект)

Простое приложение на **Laravel** с постами (CRUD), страницами «Главная» и «О проекте», стилями **Tailwind CSS** (Vite).

## Требования

- PHP **^8.3**
- Composer
- Node.js **18+** и npm (для сборки фронтенда)

## Установка

Клонируйте репозиторий и из корня проекта:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

На Windows в cmd вместо `cp` можно: `copy .env.example .env`.

Настройте БД в `.env` (по умолчанию удобен SQLite):

```env
DB_CONNECTION=sqlite
```

Создайте файл базы и выполните миграции:

```bash
touch database/database.sqlite
php artisan migrate
```

На Windows: `type nul > database\database.sqlite` или создайте пустой файл `database/database.sqlite` вручную.

Установите npm-зависимости и соберите ассеты:

```bash
npm install
npm run build
```

Либо одной командой (если настроен скрипт в `composer.json`):

```bash
composer run setup
```

## Запуск локально

В одном терминале:

```bash
php artisan serve
```

Для разработки с пересборкой CSS при изменениях — во втором:

```bash
npm run dev
```

Сайт: `http://127.0.0.1:8000` (или адрес, который выведет `artisan serve`).

## Тесты

```bash
php artisan test
```

## Полезные команды

| Команда | Назначение |
|--------|------------|
| `php artisan route:list` | Список маршрутов |
| `php artisan migrate:fresh --seed` | Чистая БД + сиды (если настроены) |

## Структура проекта (ключевое)

- `routes/web.php` — маршруты (в т.ч. `Route::resource('posts', ...)`).
- `app/Http/Controllers/PostController.php` — посты и статические страницы.
- `app/Http/Requests/` — валидация создания/обновления постов.
- `resources/views/` — Blade-шаблоны; главная и «О проекте» используют Tailwind через `@vite`.
- `resources/css/app.css` — точка входа Tailwind v4.

## Лицензия

MIT (как у стандартного скелета Laravel).
