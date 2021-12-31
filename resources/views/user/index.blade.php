<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>GIS Tumbuhan Obat</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
    <!-- endbuild -->
    {{-- asset Mapbox --}}
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <style>
        .myPadding {
            padding: 40px 0;
        }

    </style>
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <div class="preloader">
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
        </div>
    </div>
    <!--preloader end-->
    <div id="app">
        <App />
    </div>

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">&copy; King Pro P4W, All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="small-text">Buce</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{ asset('user/js/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/popper.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/jquery.rcounterup.js') }}"></script>
    <script src="{{ asset('user/js/vendors/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/validator.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/hs.megamenu.js') }}"></script>
    <script src="{{ asset('user/js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/js/vendors/countdown.min.js') }}"></script>

    <script src="{{ asset('user/js/app.js') }}"></script>
    <!--endbuild-->
    <script src="{{ mix('js/myVue.js') }}"></script>

</body>

</html>
