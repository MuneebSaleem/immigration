<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'U.S. Immigration Support') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dist/css/font-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('dist/css/select2.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('dist/css/select2-bootstrap-5-theme.min.css')  }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app bg-white">


        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>

<script src="{{ asset('dist/js/select2.full.min.js') }}"></script>
