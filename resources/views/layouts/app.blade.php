<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title', 'Movies')</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        @include('partials.header')
    </header>
    <main class="container">
        <section class="row">
            @yield('content')
        </section>
        
    </main>

    <!-- Assets JS/CSS -->
    @vite('resources/js/app.js')
</body>
</html>
