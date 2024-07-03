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

    {{-- <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="fa fa-envelope"></i> info@company.com</li>
                        <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

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
                            <li><a href="#">Articles</a></li>
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
        <div class="row">
            <div class="col-lg-3 mt-5">
                <img src="/profile/assets/images/US-Logo-Footer.png" alt="">
            </div>
            <div class="col-lg-3">
                {{-- <div class="col-lg-2 col-md-3 footer-links"> --}}
                <h2>About Us</h2>
                <ul>
                    <li><a href="" class="active">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                </ul>
                {{-- </div><!-- End footer links column--> --}}
            </div>
            <div class="col-lg-3">
                <h2>Central Office</h2>
            </div>
            <div class="col-lg-3">
                <h2>Newsletter</h2>
                <p>Sign up to our newsletter and stay up to date</p>
            </div>
        </div>
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
