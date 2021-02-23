<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-boolpress</title>

    </head>
    <body>
        <header>
            <nav>
                <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
                <a href="{{ route('posts') }}" class="{{Route::currentRouteName() === 'posts' ? 'active' : '' }}">POSTS</a>
            </nav>
        </header>
        <h1>home laravel-boolpress</h1>
    </body>
</html>
