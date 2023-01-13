<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FYT</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        input::placeholder {
            color: #000000;
            opacity: 1;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/css/style-salvia.css', 'resources/css/vendor.bundle.css'])
</head>

<body class="antialiased">

    <body class="nk-body body-wider mode-onepage">
        <div class="nk-wrap">
            <header class="nk-header page-header is-transparent is-sticky is-shrink is-split" id="header">
                <!-- Header @s -->
                <!-- Banner @s -->
                <div class="header-banner"
                    style="background: linear-gradient(137deg,rgba(0,255,124,0.72) 0%, #00acff 80%);">
                    <div class="nk-banner">
                        <div class="banner banner-fs banner-single banner-s1">
                            <div class="banner-wrap my-auto">
                                <div class="container container-xxl">
                                    <div
                                        class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-60px">
                                        <div class="col-lg-6 col-xl-5 text-center text-lg-start ">
                                            <div class="banner-caption tc-light animated d-flex flex-column align-items-center text-center"
                                                data-animate="fadeInUp" data-delay="1.25">
                                                <img src="{{ Vite::asset('resources/images/logo/logo.png') }}"
                                                    alt="Find Your Trades logo" srcset="">
                                                <h4 class="text-white  mt-5">Get early acces to our newest propfirm
                                                    that
                                                    will help you to get
                                                    shortcuts and fund your trades faster than any other.
                                                </h4>
                                            </div>
                                            <form action="{{ route('landing.send.mail') }}" method="post"
                                                class="d-flex flex-column align-items-center mt-5">
                                                @method('POST')
                                                @csrf
                                                <input type="email" class="w-100 bg-transparent mb-3 p-4 fs-5"
                                                    style="color:white; border: 1px solid white; border-radius: 5px; height: 3rem"
                                                    value="ENTER YOUR EMAIL" name="email">
                                                <button type="submit" class="btn btn-dark text-white w-100 fs-5"
                                                    style="height: 3rem">SEND</button>
                                            </form>
                                        </div><!-- .col -->
                                        <div class="col-lg-6 col-xl-7 col-md-8 col-sm-9">
                                            <div class="banner-gfx banner-gfx-s2 position-relative animated"
                                                data-animate="fadeInUp" data-delay="1.35">
                                                <img src="{{ Vite::asset('resources/images/app-screens/sc-mockup.png') }}"
                                                    alt="mockup">
                                                <div class="has-flex-slider gfx-screen round" data-slide-speed="2500"
                                                    data-slide-show="true" data-anim-loop="true" data-anim-speed="1500">
                                                    <ul class="slides">
                                                        <li class="gfx-slide">
                                                            <div class="bg-image round">
                                                                <img src="{{ Vite::asset('resources/images/landing/app-screenn.png') }}"
                                                                    alt="slide img">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div>
                            </div>
                            <div class="banner-bottom w-100 pb-5 animated" data-animate="fadeInUp" data-delay="1.45">
                                <div class="container container-xxl">
                                    <div
                                        class="d-flex justify-content-end justify-content-md-end align-items-center flex-lg-nowrap flex-wrap">
                                        <ul class="social pt-3 pt-md-0">
                                            <li><a href="#"><em class="social-icon fab fa-facebook-f" style="padding-top:8px;"></em></a>
                                            </li>
                                            <li><a href="#"><em class="social-icon fab fa-twitter" style="padding-top:8px;"></em></a>
                                            </li>
                                            <li><a href="#"><em class="social-icon fab fa-youtube" style="padding-top:8px;"></em></a>
                                            </li>
                                            <li><a href="#"><em class="social-icon fab fa-instagram" style="padding-top:8px;"></em></a>
                                            <li><a href="#"><em class="social-icon fab fa-telegram" style="padding-top:8px;"></em></a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-banner -->
                    <div class="nk-ovm shape-z6" style="opacity: 1;">
                        <div class="nk-ovm-inner bg-white"></div>
                    </div>
                </div>
                <!-- .header-banner @e -->
            </header>
        </div>
        <!-- preloader -->
        <div class="preloader preloader-alt no-split">
            <span class="spinner spinner-alt">
                <img class="spinner-brand" src="{{ Vite::asset('resources/images/logo-fyt.png') }}"
                    alt="preloader">
            </span>
        </div>

    </body>
    {{-- <div id="app"></div>

    @vite('resources/js/app.js') --}}
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@vite(['resources/js/jquery.bundle.js', 'resources/js/scripts.js', 'resources/js/charts.js', 'resources/js/app.js'])

</html>
