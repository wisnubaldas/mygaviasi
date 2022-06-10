<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>https://mygaviasi.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap v5.1.3 Landing Page Template" />
    <meta name="keywords" content="bootstrap v5.1.3, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/favicon_io/favicon.ico" />

    <!-- Bootstrap css-->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Materialdesign icon-->
    <link rel="stylesheet" href="/css/materialdesignicons.min.css" type="text/css" />

    <!-- Swiper Slider css -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css" type="text/css" />

    <!-- Custom Css -->
    <link href="/css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- colors -->
    <link href="/css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">

    <!--start page Loader -->
    <div id="preloader">
        <div id="status">
            <div class="load">
                <hr />
                <hr />
                <hr />
                <hr />
            </div>
        </div>
    </div>
    <!--end page Loader -->
    @include('front.navbar')
    @yield('content')
    @include('front.page.features')
    @include('front.page.faq')
    @include('front.page.contact')
    @include('front.page.footer')

    <!-- Modal -->
    <div class="modal fade" id="presentationVideo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  bg-transparent border-0">
                <div class="modal-body p-0">
                    <div class="text-end">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="ratio ratio-16x9">
                        <video id="VisaChipCardVideo" class="video-box" controls>
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->


    <!--start subscribe-Modal -->
    <div class="subscribe-modal modal fade" id="subscribe" tabindex="-1" aria-labelledby="subscribeform"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body text-center pt-0">
                    <img src="/images/subscribe.png" alt="subscribe" class="img-fluid" />
                    <h5 class="modal-title mt-2 mb-2" id="subscribeform">Subscribe</h5>
                    <p class="text-muted mb-4">
                        Join your hand with us for a better life <br /> and beautiful future.
                    </p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control border" id="subscribeemail"
                                placeholder="Enter your email" />
                            <button class="btn  btn-primary btn-sm" type="submit" id="button-addon2">Subscribe</button>
                        </div>
                    </form>
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end SUBSCRIBE modal-->

    <!-- Style switcher -->
    {{-- <div id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
        <div>
            <h6>Select your color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('success')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('info')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
        </div>
    </div> --}}
    <!-- end switcher-->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->


    <!-- Bootstrap Bundale js -->
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper Slider js -->
    <script src="/js/swiper-bundle.min.js"></script>

    <!-- Contact Js -->
    <script src="/js/contact.js"></script>

    <!-- Index-init Js -->
    <script src="/js/index.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>
    <script>
        setColor('success');
    </script>
</body>

</html>