<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        .kategory-list {
            display: flex;
            flex-wrap: wrap;
        }

        .kategory-list .item {
            text-align: center;
            border: 1px solid black;
            width: 25%;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('categories.index') }}">Категории</a>
            <a href="{{ route('props.index') }}">Свойства</a>
            <a href="{{ route('goods.index') }}">Товары</a>
            @guest
            <a href="{{ route('login') }}"> Войти </a>
            <a href="{{ route('register') }}"> Регистрация </a>
            @endguest
            @auth
            <a href="{{ route('home') }}"> Заказы </a>
            <a href="{{ route('get-logout') }}"> Выйти </a>
            @endauth
        </nav>
    </header>
    @if (session()->has('succsess'))
    <p class="alert">{{ session()->get('succsess') }}</p>
    @endif
    @yield('content')
</body>

</html>