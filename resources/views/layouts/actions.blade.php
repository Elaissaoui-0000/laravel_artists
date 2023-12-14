<!doctype html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/tailwind.css') }}" />

    @livewireStyles
    @stack('style')

</head>
<body>

    @yield('content')

    @stack('script')
    @livewireScripts
</body>
</html>
