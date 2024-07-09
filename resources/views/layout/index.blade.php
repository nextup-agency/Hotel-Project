<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Villa Agency - Real Estate HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/profile/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/profile/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/profile/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="/profile/assets/css/owl.css">
    <link rel="stylesheet" href="/profile/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        /* Custom CSS for the dropdown */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            list-style: none;
            font-size: 14px;
            text-align: left;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            min-width: 160px;
            /* Reduced width */
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu>li>a {
            display: block;
            padding: 8px 20px;
            /* Reduced padding */
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }

        .dropdown-menu>li>a:hover {
            background-color: #f5f5f5;
            color: #262626;
        }
    </style>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('frontend.home') }}" class="logo">
                            <img src="/profile/assets/images/US-logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('frontend.home') }}" class="active">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    onclick="return false;">Properties <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('frontend.residences') }}">Residential</a></li>
                                    <li><a href="#">Commercial</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('frontend.articles') }}">Articles</a></li>
                            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')
    <footer>
        {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" style="margin-top: 70px;">
                <img src="/profile/assets/images/US-Logo-Footer.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-links">
                    <ul style="margin-top: 100px;">
                        <li style="margin-bottom: 30px;"><a href="{{ route('frontend.home') }}" class="active"
                                style="color: #ffffff; font-size:17px; font-weight:500;">Home</a></li>
                        <li style="margin-bottom: 30px;"><a href="#"
                                style="color: #ffffff; font-size:17px; font-weight:500;">Properties</a></li>
                        <li style="margin-bottom: 30px;"><a href="#"
                                style="color: #ffffff; font-size:17px; font-weight:500;">Articles</a></li>
                        <li style="margin-bottom: 30px;"><a href="{{ route('frontend.about') }}"
                                style="color: #ffffff; font-size:17px; font-weight:500;">About Us</a></li>
                        <li style="margin-bottom: 30px;"><a href="{{ route('frontend.contact') }}"
                                style="color: #ffffff; font-size:17px; font-weight:500;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h2 style="font-size: 20px; margin-bottom: 10px; letter-spacing:2px;">Central Office</h2>
                <p style="font-size: 15px; font-weight:500; margin-bottom: 10px; letter-spacing:0.5px;">
                    Harbour Bay Downtown, Jl. Duyung, Sei Jodoh, Kec. Batu Ampar, Kota Batam, Kepulauan Riau 29453
                </p>
                <div style="display: flex; align-items: center; margin-bottom:10px;">
                    <img src="/profile/assets/images/telephone-1.svg" alt=""
                        style="width: 27px; height: 27px; margin-right: 15px;">
                    <p class="text-decoration-underline" style="margin-bottom: 0; font-weight:400">0811-7796-999</p>
                </div>
                <div style="display: flex; align-items: center;">
                    <img src="/profile/assets/images/email-2.svg" alt=""
                        style="width: 27px; height: 27px; margin-right: 15px;">
                    <p style="margin-bottom: 0; font-weight:300">info@unionsquarebatam.com</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h2 style="font-size: 20px; font-weight:600; letter-spacing: 2px; margin-bottom: 10px;">Newsletter
                </h2>
                <p style="font-size: 15px; font-weight:500; letter-spacing:0.5px; margin-bottom:10px">
                    Sign up to our newsletter and stay up to date
                </p>
                <input type="text" class="form-control opacity-25" value="Your Email Address" id="name"
                    name="name" required>
                <p style="margin-top: 10px; font-size: 15px; font-weight:400; letter-spacing:0.5px;">Connect with us
                </p>
                <div style="display: flex; align-items: center;">
                    <a href="#" target="_blank"><img src="/profile/assets/images/whatsapp.svg" alt=""
                            style="width: 30px; height: 30px; margin-right: 15px;"></a>
                    <a href="#" target="_blank"><img src="/profile/assets/images/facebook.svg" alt=""
                            style="width: 30px; height: 30px; margin-right: 15px;"></a>
                    <a href="#" target="_blank"><img src="/profile/assets/images/instagram.svg" alt=""
                            style="width: 30px; height: 30px; margin-right: 15px;"></a>
                    <a href="#" target="_blank"><img src="/profile/assets/images/linkedin.svg" alt=""
                            style="width: 30px; height: 30px; margin-right: 15px;"></a>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/profile/vendor/jquery/jquery.min.js"></script>
    <script src="/profile/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/profile/assets/js/isotope.min.js"></script>
    <script src="/profile/assets/js/owl-carousel.js"></script>
    <script src="/profile/assets/js/counter.js"></script>
    <script src="/profile/assets/js/custom.js"></script>


</body>

</html>
