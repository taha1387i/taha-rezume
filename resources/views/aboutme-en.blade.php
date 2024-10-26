
    @extends('layouts-en.app-about-en')

    @section('section-about-en')

        <!-- hobabs -->
        <ul id="hobab">
            <li class="hhobab hh-1"></li>
            <li class="hhobab hh-2"></li>
            <li class="hhobab hh-3"></li>
            <li class="hhobab hh-4"></li>
            <li class="hhobab hh-5"></li>
            <li class="hhobab hh-6"></li>
            <li class="hhobab hh-7"></li>
            <li class="hhobab hh-8"></li>
            <li class="hhobab hh-9"></li>
            <li class="hhobab hh-10"></li>
            <li class="hhobab hh-11"></li>
            <li class="hhobab hh-12"></li>
            <li class="hhobab hh-13"></li>
        </ul>
        <!-- End hobabs -->

        <!-- main about-en -->
        <div class="container-fluid">
            <div class="row animate__animated animate__zoomIn">

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <h3 class="mb-3">Foreign Languages</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4">English</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">Skills</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4">Programming, Website Design</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">Software</h3>
                        <hr class="w-75">
                        <h6 class="text-secondary fw-bolder mt-3" dir="ltr">Html, Css, Bootstrap, TailwindCss, Ulkit ,Java Script, Php, Laravel</h6>
                    </div>
                </div>

                <hr class="animate__animated animate__zoomIn mt-5 mb-5">

            </div>

            <div class="row animate__animated animate__zoomIn">

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <h3 class="mb-3">Courses</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4">Passing the Website Programming Course at Dibagaran School in Sari</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">Education</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4-5">Has a cycle and is Getting a Diploma</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">Additional skills</h3>
                        <hr class="w-75">
                        <h6 class="text-secondary fw-bolder mt-3">Full Stack Site Developer</h6>
                    </div>
                </div>

                <hr class="animate__animated animate__zoomIn mt-2">
            </div>

            <!-- modal -->
            <div class="d-flex justify-content-center mt-5">
                <button class="btn btn-info animate__animated animate__backInUp fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Individual and Personal Information</button>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="fw-bold">Profile Me</h4>
                                <img src="{{ asset('src/img/me-photo.jpg') }}" class="img rounded-circle mt-2" width="80px" style="height: 80px;">
                            </div>

                            <div class="col-lg-4">
                                <h4 class="fw-bold">Personal Information</h4>
                                <h6 class="fw-bold me-4 mt-3 ff-en">Age : 16year</h6>
                                <h6 class="fw-bold me-4 mt-3">Gender : men</h6>
                                <h6 class="fw-bold me-4 mt-3 ff-en"> National Code : 2081446758</h6>
                            </div>

                            <div class="col-lg-4">
                                <h4 class="fw-bold">Location Information</h4>
                                <h6 class="fw-bold me-4 mt-3">province : mazandaran</h6>
                                <h6 class="fw-bold me-4 mt-3">City : sari</h6>
                                <h6 class="fw-bold me-4 mt-3">Military Service : not done yet</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

        </div>
        <!-- main about-en -->

    @endsection
