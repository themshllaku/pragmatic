<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,400i,600,700,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        html, body
        {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="min-w-site bg-40 text-black min-h-full">
    <div id="app" class="flex min-h-screen">
        @include('layouts.app.sidebar')
        <div class="w-full">
            @include('layouts.app.header')
            @yield('content')
        </div>
    </div>
</body>
</html>
