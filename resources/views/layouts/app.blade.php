<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ginseng Strip</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('stylestuff')
</head>

<body class="bg-white">
    <div id="app">
        @php
            $currentRouteName = Route::currentRouteName();
            $currentUrl = request()->url();
        @endphp

        @yield('navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @if ($currentUrl == '' || $currentRouteName == 'beginning')

        @else
            @include('layouts.footer')
        @endif

    </div>

    @include('sweetalert::alert')
    @yield('scriptstuff')
</body>

</html>
