<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Union Square - Find A Perfect Dream House</title>

    <!-- Favicons -->
    <link href="/profile/assets/images/US-Logo.png" rel="icon">


    <!-- Bootstrap core CSS -->
    <link href="/profile/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">




    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/profile/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/profile/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="/profile/assets/css/owl.css">
    <link rel="stylesheet" href="/profile/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        /* Initially hide the dropdown menu */
        .dropdown-menu {
            display: none;
            position: absolute;
            border: none;
            min-width: 1rem;
            /* Make sure the submenu appears correctly */
        }

        /* Style the dropdown list items if needed */
        .dropdown-menu li {
            list-style: none;
        }

        /* Optional: Style the dropdown links */
        .dropdown-menu li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #000;
        }

        /* Optional: Hover effect for submenu items */
        .dropdown-menu li a:hover {
            background-color: #f0f0f0;
        }

        /* .footer-links ul {
            margin-top: 40px;
        } */

        .footer-links li {
            margin-bottom: 30px;
        }

        .footer-links li a {
            font-size: 17px;
            color: #fff;
            font-weight: 400;
            text-align: center;
        }

        .central-office h3 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0.5px;
            color: #fff;
            margin-bottom: 10px;

        }

        .central-office p {
            font-size: 15px;
            font-weight: 400;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
            max-width: 70%;
        }

        .icon-1 {
            display: flex;
            align-items: center;
        }

        .icon-1 img {
            width: 27px;
            height: 27px;
            margin-right: 15px;
        }

        .icon-1 p {
            font-weight: 400;
        }

        .icon-2 {
            display: flex;
            align-items: center
        }

        .icon-2 a img {
            width: 30px;
            height: 30px;
            margin-right: 15px;
        }

        .teks {
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 10px;
        }

        .requirement {
            background-color: rgb(205, 118, 69, 5%);
            padding-top: 30px;
            padding-bottom: 50px;
        }

        .requirement h2 {
            color: #CD7645;
            font-size: 32px;
            font-weight: 600;
        }

        .form-control {
            border: 1px solid #000;
            border-radius: 1px;
        }

        .button {
            background-color: #C85C20;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            padding: 5px;
            display: inline-block;
            font-size: 20px;
            font-weight: 500;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 40px;
            width: 162px;
            margin-right: 15px;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        @media (min-width: 992px) {

            /* Initially hide the dropdown menu */
            .dropdown-menu {
                display: none;
                position: absolute;
                border: none;
                min-width: 1rem;
                /* Make sure the submenu appears correctly */
            }

            /* Style the dropdown list items if needed */
            .dropdown-menu li {
                list-style: none;
            }

            /* Optional: Style the dropdown links */
            .dropdown-menu li a {
                display: block;
                padding: 10px;
                text-decoration: none;
                color: #000;
            }

            /* Optional: Hover effect for submenu items */
            .dropdown-menu li a:hover {
                background-color: #f0f0f0;
            }

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
                            <li><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenu">Properties</a>
                                <ul class="dropdown-menu" id="dropdownList">
                                    <li><a href="{{ route('frontend.residences') }}">Residences</a></li>
                                    <li><a href="{{ route('frontend.office') }}">Office</a></li>
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
    <a href="https://wa.me/628117796999?text=Hello,%20I am%20interested%20in%20Union%20Square%20Batam." class="float"
        target="_blank">
        <img src="/profile/assets/images/whatsapp.svg" alt="">
    </a>

    <!-- ***** Header Area End ***** -->

    @yield('content')
    <div class="section requirement">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-5">
                    Requirement</h2>
                <div class="col-lg-4">
                    <img src="/profile/assets/images/US-Logo-Requirement.png" alt="" style="padding-top: 50px;">
                </div>

                <div class="col-lg-8">
                    <form method="post" action="{{ route('frontend.requirementStore') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            @if ($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number*</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                            @if ($errors->has('phone_number'))
                                <div class="text-danger">
                                    {{ $errors->first('phone_number') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            @if ($errors->has('message'))
                                <div class="text-danger">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="button" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer style="padding: 90px 30px 50px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/profile/assets/images/US-Logo-Footer.png" alt="">
                </div>
                <div class="col-lg-2">
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenu">Dropdown</a>
                                <ul class="dropdown-menu" id="dropdownList">
                                    <li><a href="#">Submenu 1</a></li>
                                    <li><a href="#">Submenu 2</a></li>
                                    <li><a href="#">Submenu 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Articles</a></li>
                            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="central-office col-lg-4">
                    <h3>Central Office</h3>
                    <p>Harbour Bay Downtown, Jl. Duyung, Sei Jodoh, Kec. Batu Ampar, Kota Batam, Kepulauan Riau 29453
                    </p>
                    <div class="icon-1">
                        <img src="/profile/assets/images/telephone-1.svg" alt="">
                        <p style="text-decoration:underline;">0811-7796-999</p>
                    </div>
                    <div class="icon-1">
                        <img src="/profile/assets/images/email-2.svg" alt="">
                        <p>info@unionsquarebatam.com</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h3 class="teks">Connect with us</h3>
                    <div class="icon-2">
                        <a href="https://wa.me/628117796999?text=Hello,%20I am%20interested%20in%20Union%20Square%20Batam"
                            target="_blank"><img src="/profile/assets/images/whatsapp.svg" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=100086550535865" target="_blank"><img
                                src="/profile/assets/images/facebook.svg" alt=""></a>
                        <a href="https://www.instagram.com/unionsquarebatam?igsh=MWhhaDUzY3lmcWJxOQ=="
                            target="_blank"><img src="/profile/assets/images/instagram.svg" alt=""></a>

                    </div>
                </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownToggle = document.getElementById('dropdownMenu');
            var dropdownList = document.getElementById('dropdownList');

            dropdownToggle.addEventListener('click', function(event) {
                event.preventDefault();
                dropdownList.style.display = (dropdownList.style.display === 'block') ? 'none' : 'block';
            });

            // Optional: Close the dropdown if clicked outside
            document.addEventListener('click', function(event) {
                if (!dropdownToggle.contains(event.target) && !dropdownList.contains(event.target)) {
                    dropdownList.style.display = 'none';
                }
            });
        });
    </script>


</body>

</html>
