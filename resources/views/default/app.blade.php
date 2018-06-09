<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Vue</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        @yield('content')
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>