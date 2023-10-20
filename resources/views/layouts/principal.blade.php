<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gema - Software Solutions</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/imp.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">

    <!-- Module css -->
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/header-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/banner-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/about-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/blog-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/fact-counter-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact-page.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/breadcrumb-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/team-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/partner-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/testimonial-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/services-section.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer-section.css')}}">

    <link id="jssDefault" rel="stylesheet" href="{{ asset('assets/css/color/theme-color.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png"  sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png"  sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png')}}">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    @livewireStyles
</head>


<body>

    <div class="boxed_wrapper ltr">

        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <!-- <span data-text-preloader="i" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                N
                            </span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->

        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><img src="/assets/images/icon/color-palette.png" alt="Color Palette"> </button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end switcher menu -->


        <!-- Main header-->
        <header class="main-header header-style-one">

            <!--Start Header-->
            <div class="header">
                <div class="auto-container">
                    <div class="outer-box">

                        <!--Start Header Left-->
                        <div class="header-left">
                            <div class="main-logo-box">
                                <a href="index.html">
                                    <img src="/assets/images/footer/footer-logo-gema.png" alt="Awesome Logo" title="">
                                </a>
                            </div>


                            <div class="nav-outer style1 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu style1 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class=" @if(Route::currentRouteName() === 'home') current @endif"><a href="{{ route('home') }}"><span>INICIO</span></a>
                                            </li>
                                            <li class=" @if(Route::currentRouteName() === 'nosotros') current @endif"><a href="{{ route('nosotros') }}"><span>NOSOTROS</span></a>
                                              
                                            </li>
                                            <li class=" @if(Route::currentRouteName() === 'servicios') current @endif"><a href="#"><span>SERVICIOS</span></a>
                                        
                                            </li>
                                            <li class=" @if(Route::currentRouteName() === 'portafolio') current @endif"><a href="#"><span>PORTAFOLIO</span></a>
                                                
                                            </li>
                                            <li class="@if(Route::currentRouteName() === 'contacto') current @endif"><a href="contact.html"><span>CONTACTO</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>


                        </div>
                        <!--End Header Left-->

                        <!--Start Header Right-->
                        <div class="header-right">
                            <div class="phone-number-box1">
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="phone">
                                    <a href="tel:123456789">+51 968 372 292</a>
                                </div>
                            </div>
                            <div class="serach-button-style1">
                                <button type="button" class="search-toggler">
                                    <i class="icon-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <!--End Header Right-->

                    </div>
                </div>
            </div>
            <!--End header-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="clearfix">
                        <!--Logo-->
                        <div class="logo float-left">
                            <a href="index.html" class="img-responsive">
                                <img src="assets/images/resources/logo-gema.png" alt="" title="">
                            </a>
                        </div>
                        <!--Right Col-->
                        <div class="right-col float-right">
                            <!-- Main Menu -->
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/mobilemenu-logo.png"
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>
        @yield('content')

        <div class="bottom-parallax">
            <!--Start footer area -->
            <footer class="footer-area">
                <!--Start Footer-->
                <div class="footer">
                    <div class="container">
                        <div class="row text-right-rtl">

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-footer-widget single-footer-widget--company-info marbtm50">
                                    <div class="our-company-info">
                                        <div class="text-box">
                                            <p>Trujillo, Perú</p>
                                        </div>
                                        <h2><a href="tel:123456789">+51 968 372 292</a></h2>
                                        <h3><a href="mailto:yourmail@email.com">consultas@gemaswsolutions.com</a></h3>
                                        <div class="footer-social-link">
                                            <ul class="clearfix">
                                                <li>
                                                    <a href="#"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-facebook-circular-logo"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-pinterest"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-footer-widget single-footer-widget--link-box marbtm50">
                                    <div class="title">
                                        <h3>Explore</h3>
                                    </div>
                                    <div class="footer-widget-links">
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="team.html">Meet the Team</a></li>
                                            <li><a href="cases.html">Case Stories</a></li>
                                            <li><a href="blog.html">Latest News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <ul class="right">
                                            <li><a href="contact.html">Support</a></li>
                                            <li><a href="about.html">Terms of Use</a></li>
                                            <li><a href="about.html">Privacy Policy</a></li>
                                            <li><a href="contact.html">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->

                            <!--Start single footer widget-->
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                <div class="single-footer-widget">
                                    <div class="title">
                                        <h3>Noticias</h3>
                                    </div>
                                    <form class="newsletter-form" action="#">
                                        <input type="email" name="email" placeholder="Correo electrónico">
                                        <button class="btn-one" type="submit">
                                            <span class="txt">Suscribirse</span>
                                        </button>
                                        <div class="checked-box1">
                                            <input type="checkbox" name="newsletter-check" id="newsletter" checked="">
                                            <label for="newsletter">
                                                <span></span>Estoy de acuerdo con los términos y condiciones
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--End single footer widget-->

                        </div>
                    </div>
                </div>
                <!--End Footer-->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="bottom-inner">
                            <div class="footer-logo-style1">
                                <a href="index.html">
                                    <img src="assets/images/footer/footer-logo-gema.png" alt="Awesome Logo" title="">
                                </a>
                            </div>
                            <div class="copyright">
                                <p>Copyright &copy; 2023 <a href="index.html">Gema: Software Solutions</a> Todos los
                                    derechos reservados.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </footer>
            <!--End footer area-->
        </div>


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>

        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="icon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">waste</a></li>
                        <li><a href="index.html">Dumpster</a></li>
                        <li><a href="index.html">Zerowaste</a></li>
                        <li><a href="index.html">Garbage</a></li>
                        <li><a href="index.html">trash</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->
    </div>



    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/aos.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.event.move.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-sidebar-content.js')}}"></script>
    <script src="{{ asset('assets/js/knob.js')}}"></script>
    <script src="{{ asset('assets/js/map-script.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/pagenav.js')}}"></script>
    <script src="{{ asset('assets/js/scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.js')}}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/js/validation.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>

    <script src="{{ asset('assets/js/jquery-1color-switcher.min.js')}}"></script>
    <script src="{{ asset('assets/js/parallax.min.js')}}"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&callback=initMap">
        </script>

    <!-- thm custom script -->
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    @livewireScripts


</body>

</html>
