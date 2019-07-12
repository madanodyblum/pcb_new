<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fixed">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.include.style')
    @yield('custom-style')
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        <section class="body">
            @include('layouts.include.navbar')
            @include('layouts.include.sidebar')
            <div class="inner-wrapper">
                @yield('content')
            </div>
        </section>
    </div>
    <!-- footer -->
    @include('layouts.include.footer')
    @yield('custom-script')    
</body>
</html>
