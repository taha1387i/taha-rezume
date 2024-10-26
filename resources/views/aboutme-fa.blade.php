
    @extends('layouts-fa.app-aboutme')

    @section('section-about-fa')

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
        <!-- end hobabs -->

        <!-- main about-fa -->
        <div class="container-fluid">
            <div class="row animate__animated animate__zoomIn">

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <h3 class="mb-3">زبان های خارجی</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4">انگلیسی</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">مهارت ها</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4">برنامه نویسی , طراحی وب سایت</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">نرم افزار ها</h3>
                        <hr class="w-75">
                        <h6 class="text-secondary fw-bolder mt-3 ps-4" dir="ltr">Html, Css, Bootstrap, TailwindCss, Ulkit ,Java Script, Php, Laravel</h6>
                    </div>
                </div>

                <hr class="animate__animated animate__zoomIn mt-5 mb-5">

            </div>

            <div class="row animate__animated animate__zoomIn">

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <h3 class="mb-3">دوره ها</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4 ps-5">گذراندن دوره برنامه نویسی سایت در آموزشگاه دیباگران ساری</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">تحصیلات</h3>
                        <hr class="w-75">
                        <h4 class="text-secondary fw-bolder mt-3 mb-4-5">دارای سیکل و درحال گرفتن دیپلم</h4>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="fw-bold mb-3">مهارت های تکمیلی</h3>
                        <hr class="w-75">
                        <h6 class="text-secondary fw-bolder mt-3">برنامه نویس فول استک سایت</h6>
                    </div>
                </div>

                <hr class="animate__animated animate__zoomIn mt-2">
            </div>

            <!-- modal -->
            <div class="d-flex justify-content-center mt-5">
                <button class="btn btn-info animate__animated animate__backInUp fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">اطلاعات فردی و شخصی</button>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="fw-bold">پروفایل من</h4>
                                <img src="{{ asset('src/img/me-photo.jpg') }}" class="img rounded-circle mt-2" width="80px" style="height: 80px;">
                            </div>

                            <div class="col-lg-4">
                                <h4 class="fw-bold">اطلاعات فردی</h4>
                                <h6 class="fw-bold me-4 mt-3">سن : 16سال</h6>
                                <h6 class="fw-bold me-4 mt-3">جنسیت : مرد</h6>
                                <h6 class="fw-bold me-4 mt-3">کد ملی : 2081446758</h6>
                            </div>

                            <div class="col-lg-4">
                                <h4 class="fw-bold">اطلاعات محل سکونت</h4>
                                <h6 class="fw-bold me-4 mt-3">استان : مازندران</h6>
                                <h6 class="fw-bold me-4 mt-3">شهر : ساری</h6>
                                <h6 class="fw-bold me-4 mt-3">خدمت سربازی : هنوز انجام نشده</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
        </div>
        <!-- end main about-fa -->

    @endsection
