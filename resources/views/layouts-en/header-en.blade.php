<!doctype html>
<html dir="ltr">
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

<!-- header -->
<header>
    <!-- head header -->
    <div class="bg-body-tertiary">
        <nav class="flex p-3">

            <!-- logo -->
            <div class="animate__animated animate__backInDown">
                <a href="{{ route('rezome-taha-en') }}">
                    <img src="{{ asset('src/img/logo-en-site.png') }}" class="img" width="80px" alt="taha">
                </a>
            </div>
            <!-- end logo -->

            <!-- links -->
            <div class="p-2 ms-auto flex justify-end animate__animated animate__backInDown">

                <ul class="flex nav-underline gap-4 responsive-none">

                    <li>
                        <a href="{{ route('rezome-taha-en') }}" class="nav-link text-secondary">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('about-en') }}" class="nav-link text-secondary">About Me</a>
                    </li>

                    <li>
                        <a href="{{ route('services-en') }}" class="nav-link text-secondary">Services</a>
                    </li>

                    <li>
                        <a href="{{ route('example-en') }}" class="nav-link text-secondary">Example of Work</a>
                    </li>

                    <li>
                        <a href="{{ route('contact-en') }}" class="nav-link text-secondary">Contact Me</a>
                    </li>

                    <li class="flex gap-1">
                        <a href="{{ route('home-fa') }}" class="nav-link text-secondary">Fa</a>
                        <a class="text-secondary">/</a>
                        <a href="{{ route('home-en') }}" class="nav-link text-secondary">En</a>
                    </li>

                </ul>
            </div>
            <!-- end links -->

            <!-- togle menu -->
            <div class="d-none responsive-header">
                <div class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="bar bar-top"></span>
                    <span class="bar bar-center"></span>
                    <span class="bar bar-buttom"></span>
                </div>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="flex justify-center">
                        <div class="">
                            <img src="{{ asset('src/img/me-photo.jpg') }}" class="rounded-circle w-14 img" width="180px" alt="طاها" style="height: 11rem !important;">
                            <h1 class="text-center mt-3 text-secondary">Taha Ebrahimnezhad</h1>
                            <h1 class="text-center mt-2 text-secondary">Full Stack Site Developer</h1>
                        </div>
                    </div>

                    <ul class="nav-underline gap-5">

                        <li class="flex justify-center">
                            <a href="{{ route('rezome-taha-en') }}" class="nav-link text-secondary mt-4 mb-3">Home</a>
                        </li>

                        <li class="flex justify-center">
                            <a href="{{ route('about-en') }}" class="nav-link text-secondary mb-3">About Me</a>
                        </li>

                        <li class="flex justify-center">
                            <a href="{{ route('services-en') }}" class="nav-link text-secondary mb-3">Services</a>
                        </li>

                        <li class="flex justify-center">
                            <a href="{{ route('example-en') }}" class="nav-link text-secondary mb-3">Example of Work</a>
                        </li>

                        <li class="flex justify-center">
                            <a href="{{ route('contact-en') }}" class="nav-link text-secondary mb-3">Contact Me</a>
                        </li>

                        <li class="flex gap-1 flex justify-center">
                            <a href="{{ route('home-fa') }}" class="nav-link text-secondary">Fa</a>
                            <a class="text-secondary">/</a>
                            <a href="{{ route('home-en') }}" class="nav-link text-secondary">En</a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- end togle menu -->
        </nav>
    </div>
</header>

<script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('src/js/header-main.js') }}"></script>
</body>
</html>
