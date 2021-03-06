<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('title')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>
