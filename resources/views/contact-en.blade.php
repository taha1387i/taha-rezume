
    @extends('layouts-en.app-contact-en')

    @section('section-contact-en')

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

        <!-- main contact-en -->
        <div class="d-flex animate__animated animate__backInUp">

            <div class="card w-75 p-3 ms-auto me-auto mt-3">
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="mb-5" src="{{ asset('src/img/Man On Phone Skin Type 1.png') }}" width="320px">
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <h3 class="text-center">How to Contact Me ؟</h3>

                                    <div class="d-flex justify-content-around mt-4">
                                        <a href="https://www.instagram.com/taha1387_i/" target="_blank">
                                            <img class="img" src="{{ asset('src/img/Instagram.png') }}" alt="">
                                        </a>

                                        <a href="https://wa.me/+989385474802" target="_blank">
                                            <img class="img" src="{{ asset('src/img/WhatsApp.png') }}" alt="">
                                        </a>

                                        <a href="https://www.t.me/taha1387_i" target="_blank">
                                            <img class="img" src="{{ asset('src/img/Telegram.png') }}" alt="" width="50px">
                                        </a>


                                    </div>

                                    <div class="mt-5 d-flex justify-content-end">
                                        <i class="ms-2 img">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 33px">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                            </svg>
                                        </i>

                                        <h4 class="ms-3 mt-1">
                                            <a class="text-decoration-none text-dark ff-en" href="tel:09385474802">0938-547-4802</a>
                                        </h4>
                                    </div>

                                    <div class="mt-5 d-flex justify-content-end">
                                        <i class="ms-2">
                                            <img class="img" src="{{ asset('src/img/Messaging.png') }}" width="38px">
                                        </i>

                                        <h4 class="ms-3 mt-1">
                                            <a href="sms:09385474802" class="text-decoration-none text-dark ff-en" href="tel:09385474802">0938-547-4802</a>
                                        </h4>
                                    </div>

                                    <div class="mt-4 ms-2 d-flex justify-content-end">
                                        <i class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 33px;">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                            </svg>
                                        </i>
                                        <a href="mailto:taha1387.ebrahimnezhad@gmail.com" class="mt-2 ms-3 ff-en">taha1387.ebrahimnezhad
                                            @gmail.com</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end main contact-en -->

    @endsection
