<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>



    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <!-- Logo Box -->
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="{{ route('home') }}"><img src="/images/logo.png" alt="{{ env('APP_NAME') }}" title=""></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-phone"></span></div>
                            <ul>
                                <li>Requesting a Call:</li>
                                <li><strong><a href="tel:{{ env('phone') }}">{{ env('phone') }}</a></strong></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock-1"></span></div>
                            <ul>
                                <li>Monday - Friday:</li>
                                <li><strong>9am - 5pm</strong></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-location-1"></span></div>
                            <ul>
                                <li>{{ env('address') }}</li>
                                <li><strong>{{ env('country') }}</strong></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="clearfix">

                    <div class="nav-outer clearfix">
                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse scroll-nav collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('home') }}#services">Services</a></li>
                                    <li><a href="{{ route('ceo') }}">Our CEO</a></li>
                                    <li><a href="{{ route('projects') }}">Our Projects</a></li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Options Box -->
                        <div class="options-box clearfix">


                            <div class="btn-box">
                                <a href="{{ route('contact') }}" class="theme-btn btn-style-one"><span class="txt">Get A Quote</span></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ route('home') }}" title=""><img src="/images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                    <!-- Options Box -->
                    <div class="options-box clearfix">

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <!--							<div class="search-box-btn"><span class="fa fa-search"></span></div>-->
                        </div>

                        <div class="btn-box">
                            <a href="/#contact" class="theme-btn btn-style-one"><span class="txt">Get A Quote</span></a>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->



@yield('content')


    <!-- Newsletter Section -->
{{--    <section class="newsletter-section">--}}
{{--        <div class="auto-container">--}}
{{--            <div class="row clearfix">--}}

{{--                <!-- Logo Column -->--}}
{{--                <div class="logo-column col-lg-3 col-md-12 col-sm-12">--}}
{{--                    <div class="inner-column">--}}
{{--                        <div class="logo">--}}
{{--                            <a href="{{ route('home') }}"><img src="/images/newsletter-logo.png" alt="" /></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Form Column -->--}}
{{--                <div class="form-column col-lg-9 col-md-12 col-sm-12">--}}
{{--                    <div class="inner-column">--}}
{{--                        <div class="content">--}}
{{--                            <div class="title-box">--}}
{{--                                <div class="box-inner">--}}
{{--                                    <span class="icon flaticon-message-1"></span>--}}
{{--                                    Subscribe To <br> Our Newsletter--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="newsletter-form">--}}
{{--                                <form method="post" action="http://themerange.net/html/kanstr/contact.html">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="email" name="email" value="" placeholder="Enter Your Email" required="">--}}
{{--                                        <button type="submit" class="theme-btn submit-btn"><span class="txt">Submit Now</span></button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Newsletter Section -->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image:url(images/background/3.jpg)">
        <div class="side-image">
            <img src="/images/resource/footer-image.png" alt="" />
        </div>
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>Get In Touch</h4>
                                    <ul class="list-style-two">
                                        <li><span class="icon fa fa-send"></span>{{ env('address') }} <br> {{ env('country') }}</li>
                                        <li><span class="icon fa fa-envelope"></span>Email : <a href="mailto:{{ env('email') }}">{{ env('email') }}</a></li>
                                        <li><span class="icon fa fa-phone"></span>Phone : <a href="tel:{{ env('phone') }}">{{ env('phone') }}</a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>Services</h4>
                                    <ul class="list-link">
                                        <li><a href="#">Construction Management</a></li>
                                        <li><a href="#">Construction Consultants</a></li>
                                        <li><a href="#">Architecture & Building</a></li>
                                        <li><a href="#">Road Construction</a></li>
                                        <li><a href="#">Building Construction</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget request-widget">
                                    <h4>Get Free Estimate</h4>
                                    <a class="phone" href="tel:+123-456-78910">{{ env('phone') }}</a>
                                    <div class="text">Our online scheduling and payment system is safe.</div>
                                    <a class="btn-style-six theme-btn" href="#contact"><span class="txt">Request With Online Form</span></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright">Copyright &copy; {{ date('Y') }} <a href="#">{{ env('APP_NAME') }}</a> All rights reserved.</div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Social Box -->
{{--                        <ul class="social-box">--}}
{{--                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>--}}
{{--                            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>--}}
{{--                            <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>--}}
{{--                            <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>--}}
{{--                            <li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>

    </footer>


</div>
<!--End pagewrapper-->

<!-- Header Search -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
    <button class="close-search"><span class="flaticon-multiply"></span></button>
    <form method="post" action="http://themerange.net/html/kanstr/blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->


<!--Scroll to top-->
<div class="back-to-top scroll-to-target show-back-to-top" data-target="html">TOP</div>

<script src="/js/jquery.js"></script>

<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/nav-tool.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/pagenav.js"></script>
<script src="/js/tilt.jquery.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/script.js"></script>
<script src="/js/color-settings.js"></script>

</body>
</html>


{{--themerange.net/html/kanstr/index-4.html--}}
