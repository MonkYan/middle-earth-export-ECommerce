<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Middle Earth Export') - Middle Earth</title>
    <!-- style -->
{{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{'/css/all.css'}}">
    <!-- Bootstrap v4.3.1 -->
    <link rel="stylesheet" href="{{'/css/bootstrap.min.css'}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{'/css/normalize.css'}}">
    <link rel="stylesheet" href="{{'/css/main.css'}}">
    <!-- Jquery ui -->
    <link rel="stylesheet" href="{{'/css/jquery-ui.css'}}">
    <!-- Responsive Menu CSS -->
    <link rel="stylesheet" href="{{'/css/meanmenu.css'}}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{'/css/styles.css'}}">
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <div class="container">
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    <!-- JS script -->
{{--    <script src="{{ mix('js/app.js') }}"></script>--}}
    @yield('scriptsAfterJs')
</body>
</html>
