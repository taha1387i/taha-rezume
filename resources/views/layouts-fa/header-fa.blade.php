<!doctype html>
<html dir="rtl">
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
        <div class="bg-body-tertiary">
            <nav class="flex p-3">

                <!-- logo -->
                <div class="animate__animated animate__backInDown">
                    <a href="{{ route('rezome-taha') }}">
                        <img src="{{ asset('src/img/logo-site.png') }}" class="img" width="80px" alt="طاها">
                    </a>
                </div>
                <!-- end logo -->

                <!-- links -->
                <div class="p-2 me-auto flex justify-end animate__animated animate__backInDown">

                    <ul class="flex nav-underline gap-4 responsive-none">

                        <li>
                            <a href="{{ route('rezome-taha') }}" class="nav-link text-secondary">خانه</a>
                        </li>

                        <li>
                            <a href="{{ route('about-fa') }}" class="nav-link text-secondary">درباره من</a>
                        </li>

                        <li>
                            <a href="{{ route('services-fa') }}" class="nav-link text-secondary">سرویس ها</a>
                        </li>

                        <li>
                            <a href="{{ route('example-fa') }}" class="nav-link text-secondary">نمونه کارها</a>
                        </li>

                        <li>
                            <a href="{{ route('contact-fa') }}" class="nav-link text-secondary">تماس با من</a>
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
                                <h1 class="text-center mt-3 text-secondary">طاها ابراهیم نژاد</h1>
                                <h1 class="text-center mt-2 text-secondary">برنامه نویس فول استک سایت</h1>
                            </div>
                        </div>

                        <ul class="nav-underline gap-5">

                            <li class="flex justify-center">
                                <a href="{{ route('rezome-taha') }}" class="nav-link text-secondary mt-4 mb-3">خانه</a>
                            </li>

                            <li class="flex justify-center">
                                <a href="{{ route('about-fa') }}" class="nav-link text-secondary mb-3">درباره من</a>
                            </li>

                            <li class="flex justify-center">
                                <a href="{{ route('services-fa') }}" class="nav-link text-secondary mb-3">سرویس ها</a>
                            </li>

                            <li class="flex justify-center">
                                <a href="{{ route('example-fa') }}" class="nav-link text-secondary mb-3">نمونه کارها</a>
                            </li>

                            <li class="flex justify-center">
                                <a href="{{ route('contact-fa') }}" class="nav-link text-secondary mb-3">تماس با من</a>
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
