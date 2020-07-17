<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}"/>
    <!-- Boxicon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}"/>
    <!-- Flaticon CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}"/>
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}"/>
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}"/>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"/>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}"/>

    <!-- Tittle -->
    <title>{{__('Techmasters | IT Solution and Digital Service Company')}}</title>
</head>

<body>
<!-- PreLoader Start -->
<div class="loader-content">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
</div>
<!-- PreLoader End -->

<!-- Header Area -->
<header class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-sm-0">
                <div class="logo">
                    <a href="/"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-8 text-right pr-0">
                <div class="header-content-right">
                    <ul class="header-contact">
                        <li><a href="tel:+230 5473 8402"><i class="bx bxs-phone-call"></i> +230 5473 8402</a></li>
                        <li><a href="mailto:hello@techmasters.mu"><i class="bx bxs-envelope"></i> hello@techmasters.mu</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 text-right pl-0">
                <div class="header-content-right">
                    <ul class="header-social">
                        <li>
                            <a href="https://www.facebook.com/techmastersconsulting" target="_blank"><i class="bx bxl-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"> <i class="bx bxs-envelope"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"> <i class="bx bxl-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

<!--Navbar Area -->
<div class="navbar-area">
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="assets/images/logo.png" alt="logo" />
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav text-left">

                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#solution" class="nav-link ">Solutions</a>

                        </li>
                        <li class="nav-item">
                            <a href="#case" class="nav-link ">Case Studies</a>

                        </li>
                           <li class="nav-item">
                            <a href="#process" class="nav-link ">Work Process</a>

                        </li>   <li class="nav-item">
                            <a href="#contact" class="nav-link ">Contact</a>

                        </li>




                    </ul>
                </div>

                <div class="nav-btn">
                    <a href="#contact" class="box-btn">Get Started</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

@yield('content')

<!-- Footer Area -->
<footer class="footer-area">

    <div class="copy-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <p class="center-block">
                        Copyright @2020 Techmasters. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevrons-up'></i>
    <i class='bx bx-chevrons-up'></i>
</div>
<!-- End Go Top Area -->


<!-- jQuery Min JS -->
<script src="assets/js/jquery-3.5.0.min.js"></script>
<!-- Boostrap Js  -->
<script src="assets/js/popper.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- MeanMenu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Magnific Popup Min JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Owl carasol Js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Boxicon Js -->
<script src="assets/js/boxicons.js"></script>
<!-- Wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- Isotope Js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Form Ajaxchimp JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator Js  -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact Form Js -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Main js -->
<script src="assets/js/main.js"></script>
</body>
</html>
