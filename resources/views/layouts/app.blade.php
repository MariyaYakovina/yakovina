<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Paris 2024')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('partials.header')
    @include('partials.nav')
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
