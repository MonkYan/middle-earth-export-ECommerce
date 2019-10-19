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

    <link rel="stylesheet" href="{{ URL::asset('css/all.css') }}">

    <!-- Bootstrap v4.3.1 -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">

    <!-- Jquery ui -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">

    <!-- Responsive Menu CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
{{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}

    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

    <!-- Global JS -->
    <script src="/public/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="/public/js/vendor/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="/public/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/plugins.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/jquery-ui.js"></script>
    <script src="/public/js/jquery.meanmenu.min.js"></script>
    <!-- Isotope JS -->
    <script src="/public/js/isotope.pkgd.min.js"></script>
    <script src="/public/js/imagesloaded.pkgd.min.js"></script>
    <!-- Custom JS -->
    <script src="/public/js/main.js"></script>
    <!-- Google Map JS -->
    <script src="http://ditu.google.cn/maps/api/js?key=AIzaSyBvEEMx3XDpByNzYNn0n62Zsq_sVYPx1zY"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>


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
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scriptsAfterJs')
</body>
</html>
