<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- {{ config('app.name') }} -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/test.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="padding: 60px 0;">
    <div id="app">
        @include('layouts.header2')

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            @include('layouts.footer')
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-1/js/6-1-1.js"></script>
            <script src="{{ asset('js/animation.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="test.js"></script>
        </footer>
    </div>
</body>
</html>
