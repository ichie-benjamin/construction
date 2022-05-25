
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->

    <style>
        .call-to-action-section h2 {
            color: #fff;
        }
        .counter-section .counter-column h2 {
            color: #fff;
        }
        .fact-counter .count-outer .count-text {
            color: #fff;
        }
    </style>
</head>

<body>

<div class="page-wrapper">

{{--    <!-- Preloader -->--}}
{{--    <div class="preloader"></div>--}}

<!-- Main Header-->
    <header class="main-header header-style-one">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">

                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="links clearfix">
                            <li><a href="#"><span class="icon fa fa-phone"></span>{{ env('phone') }}</a></li>
                            <li><a href="#"><span class="icon fa fa-envelope-o"></span>{{ env('email') }}</a></li>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right clearfix">
                        <!--social-icon-->
                        <div class="social-icon">

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Header Top End -->

        <!-- Main Box -->
        <div class="main-box">
            <div class="auto-container">
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('home') }}"><img src="/images/logo_new.png" alt=""></a></div>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">

                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('home') }}">Home </a></li>
                                    <li><a href="{{ route('about') }}">About </a></li>
                                    <li><a href="{{ route('services') }}">Services </a></li>
                                    <li><a href="{{ route('projects') }}">Projects </a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us </a></li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <!--Search Box-->

                        </div>
                    </div>
                    <!--Nav Outer End-->

                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="sticky-inner-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="{{ route('home') }}" class="img-responsive"><img src="/images/logo_new.png" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('home') }}">Home </a></li>
                                    <li><a href="{{ route('about') }}">About </a></li>
                                    <li><a href="{{ route('services') }}">Services </a></li>
                                    <li><a href="{{ route('projects') }}">Projects </a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us </a></li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->


                    </div>

                </div>
            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->


@yield('content')

<!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/6.jpg)">

        <div class="auto-container">

            <!--Upper Box-->
            <div class="upper-box">
                <ul class="list-style-one clearfix">
                    <li><span class="icon flaticon-pin"></span>{{ env('address') }}, <br> {{ env('country') }}</li>
                    <li><span class="icon flaticon-envelope-1"></span>Email us : <br>{{ env('email') }}</li>
                    <li><span class="icon flaticon-technology-2"></span>Call us : <br> {{ env('phone') }}</li>
                </ul>
            </div>

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="{{ route('home') }}"><img src="images/logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">

                                        Setting the standard for modern aviation is a top priority for Airbus.
                                        Making it safer, cleaner and more fuel-efficient thanks to our products,
                                        services and customer care, while ensuring our customers'
                                        needs are covered all over the world is our commitment.

                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2>Quick Links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="">Projects</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2>Our Services</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ route('services') }}">Train</a></li>
                                            <li><a href="{{ route('services') }}">Operate </a></li>
                                            <li><a href="{{ route('services') }}">Maintain</a></li>
                                            <li><a href="{{ route('services') }}">Enhance </a></li>
                                            <li><a href="{{ route('services') }}">Expand </a></li>
{{--                                            <li><a href="{{ route('services') }}">Malls and Event centers</a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget newsletter-widget">
                                    <h2>Contact Us</h2>
                                    <div class="widget-content">
                                        <div class="text">Get to know more about {{ env('APP_NAME') }}</div>
                                        <!--Emailed Form-->
                                        <a href="{{ route('contact') }}"  class="theme-btn">Contact us</a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright">Copyright &copy; {{ env('APP_NAME') }}. All rights reserved. </div>
                    </div>
                    {{--                    <div class="column col-md-6 col-sm-12 col-xs-12">--}}
                    {{--                        <div class="created">Created by: ThemeArc</div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="/js/jquery.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/js/main-slider-script.js"></script>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/js/isotope.js"></script>

<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/script.js"></script>

</body>
</html>
