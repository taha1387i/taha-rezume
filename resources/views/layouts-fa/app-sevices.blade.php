<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezome-taha</title>
    <link rel="icon" href="{{ asset('src/img/me-photo.jpg') }}">
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/animate.min.css') }}">
    @vite('resources/css/app.css')
</head>
<body>

    @include('layouts-fa.header-fa')

    @yield('section-services-fa')

    <script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('src/js/jquery-3.7.1.slim.min.js') }}"></script>
    <script src="{{ asset('src/js/tilt.jquery.min.js') }}"></script>
</body>
</html>
