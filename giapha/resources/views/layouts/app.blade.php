<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front_end/home/css/reset.css') }}"> <!-- CSS reset -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-tree.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('front_end/home/css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('front_end/home/css/style.css') }}"> <!-- Resource style -->
    <script src="{{ asset('front_end/home/js/modernizr.js') }}"></script> <!-- Modernizr -->

</head>
<body>
    <div id="app">
        @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <footer>
        @include('layouts.footer')
    </footer>
            <script src="{{ asset('front_end/home/js/jquery-2.1.4.js')}}"></script>
            <script src="{{ asset('front_end/home/js/jquery.mobile.custom.min.js')}}"></script>
            <script src="{{ asset('front_end/home/js/main.js')}}"></script> <!-- Resource jQuery -->
</body>
</html>
