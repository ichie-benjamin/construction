
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kanstr Construction & Co. HTML Template | Homepage 03</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header / Header Style Three -->
    <header class="main-header header-style-three">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">

                    <!-- Logo Box -->
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="{{ route('home') }}"><img src="images/logo-3.png" alt="" title=""></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-phone"></span></div>
                            <ul>
                                <li>Requesting a Call:</li>
                                <li><strong><a href="tel:+301-357-1234">(301) 357 1234</a></strong></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock-1"></span></div>
                            <ul>
                                <li>Sunday - Friday:</li>
                                <li><strong>9am - 8pm</strong></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-location-1"></span></div>
                            <ul>
                                <li>1428 Callison Laney Building</li>
                                <li><strong>California</strong></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container clearfix">

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

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="{{ route('home') }}">Homepage One</a></li>
                                            <li><a href="index-2.html">Homepage Two</a></li>
                                            <li><a href="index-3.html">Homepage Three</a></li>
                                            <li class="updates">New Updates</li>
                                            <li class="dropdown"><a href="#">One Pager Style</a>
                                                <ul>
                                                    <li><a href="index-4.html">HomePage One</a></li>
                                                    <li><a href="index-5.html">HomePage Two</a></li>
                                                    <li><a href="index-6.html">HomePage Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="{{ route('home') }}">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">About us</a>
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="price.html">Price</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-detail.html">Team Detail</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="comming-soon.html">Comming Soon</a></li>
                                            <li><a href="terms.html">Terms & Condition</a></li>
                                            <li><a href="privacy.html">Privacy & Policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="general-contracting.html">General Contracting</a></li>
                                            <li><a href="apartment-design.html">Apartment Design</a></li>
                                            <li><a href="metrial-managment.html">Metrial Managment</a></li>
                                            <li><a href="building-renovation.html">Building Renovation</a></li>
                                            <li><a href="building-construction.html">Building Construction</a></li>
                                            <li><a href="architecture-design.html">Architecture Design</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Projects</a>
                                        <ul>
                                            <li><a href="projects.html">Our Projects</a></li>
                                            <li><a href="portfolio-two.html">Projects 02</a></li>
                                            <li><a href="portfolio-three.html">Projects 03</a></li>
                                            <li><a href="portfolio-detail.html">Projects Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu-bar row clearfix">
                                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                                    <h3>About Us</h3>
                                                    <ul>
                                                        <li><a href="about.html">About us</a></li>
                                                        <li><a href="price.html">Price</a></li>
                                                        <li><a href="faq.html">Faq's</a></li>
                                                        <li><a href="team.html">Team</a></li>
                                                        <li><a href="team-detail.html">Team Detail</a></li>
                                                        <li><a href="testimonial.html">Testimonial</a></li>
                                                        <li><a href="comming-soon.html">Comming Soon</a></li>
                                                        <li><a href="error-page.html">Error Page</a></li>
                                                        <li><a href="terms.html">Terms & Condition</a></li>
                                                        <li><a href="privacy.html">Privacy & Policy</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                                    <h3>Services</h3>
                                                    <ul>
                                                        <li><a href="services.html">Services</a></li>
                                                        <li><a href="general-contracting.html">General Contracting</a></li>
                                                        <li><a href="apartment-design.html">Apartment Design</a></li>
                                                        <li><a href="metrial-managment.html">Metrial Managment</a></li>
                                                        <li><a href="building-renovation.html">Building Renovation</a></li>
                                                        <li><a href="building-construction.html">Building Construction</a></li>
                                                        <li><a href="architecture-design.html">Architecture Design</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                                    <h3>Blog</h3>
                                                    <ul>
                                                        <li><a href="blog.html">Our Blog</a></li>
                                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                                        <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-rightsidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="news-detail.html">Blog Details</a></li>
                                                        <li><a href="error-page.html">Error Page</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                                    <h3>Our Shop</h3>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-single.html">Shop Details</a></li>
                                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-classic.html">Blog Classic</a></li>
                                            <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-rightsidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="news-detail.html">Blog Details</a></li>
                                            <li><a href="error-page.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop Details</a></li>
                                            <li><a href="shoping-cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Contact</a>
                                        <ul>
                                            <li><a href="contact.html">Contact us 01</a></li>
                                            <li><a href="contact-2.html">Contact us 02</a></li>
                                            <li><a href="contact-3.html">Contact us 03</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Options Box -->
                        <div class="options-box clearfix">

                            <!-- Search -->
                            <div class="search-box">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search Here" required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook-f"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google"></a></li>
                            </ul>

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
                    <a href="{{ route('home') }}" title=""><img src="images/logo-small.png" alt="" title=""></a>
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
                            <div class="search-box-btn"><span class="fa fa-search"></span></div>
                        </div>

                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Get A Quote</span></a>
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
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Sidebar Cart Item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="images/logo-2.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>Kanstr@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

    <!-- Main Slider Section Three -->
    <section class="main-slider-three">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image:url(images/main-slider/image-4.jpg)">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-5 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="images/main-slider/content-image-1.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">We Are Experience Company</div>
                                <h1>Prefection is always <br> under construction</h1>
                                <div class="text">We produce positive results from ever-growing Industrial & <br> manufacturing, we have established a corporate mandate to maintain.</div>
                                <div class="clearfix">
                                    <div class="btns-box">
                                        <a class="btn-style-three theme-btn" href="about.html"><span class="txt">Read More</span></a>
                                    </div>
                                    <div class="play-box">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                                        See Our Achivity
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url(images/main-slider/image-5.jpg)">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-5 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="images/main-slider/content-image-1.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">We Are Experience Company</div>
                                <h1>Prefection is always <br> under construction</h1>
                                <div class="text">We produce positive results from ever-growing Industrial & <br> manufacturing, we have established a corporate mandate to maintain.</div>
                                <div class="clearfix">
                                    <div class="btns-box">
                                        <a class="btn-style-three theme-btn" href="about.html"><span class="txt">Read More</span></a>
                                    </div>
                                    <div class="play-box">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                                        See Our Achivity
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url(images/main-slider/image-6.jpg)">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-5 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="images/main-slider/content-image-1.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">We Are Experience Company</div>
                                <h1>Prefection is always <br> under construction</h1>
                                <div class="text">We produce positive results from ever-growing Industrial & <br> manufacturing, we have established a corporate mandate to maintain.</div>
                                <div class="clearfix">
                                    <div class="btns-box">
                                        <a class="btn-style-three theme-btn" href="about.html"><span class="txt">Read More</span></a>
                                    </div>
                                    <div class="play-box">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                                        See Our Achivity
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Main Slider Section -->

    <!-- CTA Section Two -->
    <section class="cta-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="pattern-layer" style="background-image:url(images/background/pattern-12.jpg)"></div>
                <div class="icon-image">
                    <img src="images/resource/cta.png" alt="" />
                </div>
                <h3>Looking For Best Partner <br> For Your Next Construction Works?</h3>
                <div class="btn-box">
                    <a class="btn-style-four theme-btn" href="contact.html"><span class="txt">Contact Now</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section Two -->

    <!-- About Section Two -->
    <section class="about-section-two">
        <div class="pattern-layer-one" style="background-image:url(images/background/pattern-13.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title"><span class="separator"></span>About Company</div>
                            <h2>We are leading for industrial <br> market very successfully</h2>
                            <div class="text">Manufactoriuring industry became a key sector of production and labour and <br> North American countries during the Industrial Revolution.</div>
                        </div>
                        <div class="bold-text">Providing innovative industrial <br> solutions for future</div>
                        <ul class="list-style-three">
                            <li>Deliver ultimate industrial services.</li>
                            <li>We are committed to serve you better.</li>
                            <li>Have worlds best team.</li>
                        </ul>
                        <div class="author-box">
                            <div class="box-inner">
                                <div class="author-image">
                                    <img src="images/resource/author-3.jpg" alt="" />
                                </div>
                                <div class="signature">
                                    <img src="images/icons/signature-1.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="images/resource/about-1.jpg" alt="" />
                        </div>
                        <div class="image-two">
                            <img src="images/resource/about-2.jpg" alt="" />
                            <div class="play-box">
                                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            </div>
                        </div>
                        <div class="text">
                            We're Providing the Best Industrial Services
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section Two -->

    <!-- Counter Section Two -->
    <section class="counter-section-two">
        <div class="auto-container">
            <!-- Fact Counter -->
            <div class="fact-counter-two">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-planet-earth-1"></div>
                                <div class="counter-title">Satisfied Clients</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3500" data-stop="4390">0</span>+
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-project-management"></div>
                                <div class="counter-title">Active projects</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="2390">0</span>+
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-trophy-2"></div>
                                <div class="counter-title">Awards Winner</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="28000">0</span>+
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-engineer"></div>
                                <div class="counter-title">Engineer Members</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3500" data-stop="3390">0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section Two -->

    <!-- Services Section Three -->
    <section class="services-section-three">
        <div class="side-icon">
            <img src="images/resource/service-icon-1.png" alt="" />
        </div>
        <div class="pattern-layer-one" style="background-image:url(images/background/pattern-14.png)"></div>
        <div class="pattern-layer-two" style="background-image:url(images/background/pattern-15.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><span class="separator"></span>What We Do<span class="separator-two"></span></div>
                <h2>We will satisfy you by our <br> servicing plan</h2>
            </div>
            <div class="row clearfix">

                <!-- Service Block Three -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-project"></div>
                        <div class="big-icon flaticon-project"></div>
                        <h5><a href="general-contracting.html">Automotive parts & <br> system build</a></h5>
                        <div class="text">Lorem Ipsum available, but the maj to ority have suffered alterati on in som.</div>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-engineer-2"></div>
                        <div class="big-icon flaticon-engineer-2"></div>
                        <h5><a href="general-contracting.html">Construction & <br> Engineering service</a></h5>
                        <div class="text">Lorem Ipsum available, but the maj to ority have suffered alterati on in som.</div>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-construction-machine"></div>
                        <div class="big-icon flaticon-construction-machine"></div>
                        <h5><a href="general-contracting.html">Ship building <br> insudtry services</a></h5>
                        <div class="text">Lorem Ipsum available, but the maj to ority have suffered alterati on in som.</div>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-files-and-documents"></div>
                        <div class="big-icon flaticon-files-and-documents"></div>
                        <h5><a href="general-contracting.html">Construction <br> consulting services</a></h5>
                        <div class="text">Lorem Ipsum available, but the maj to ority have suffered alterati on in som.</div>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-roof"></div>
                        <div class="big-icon flaticon-roof"></div>
                        <h5><a href="general-contracting.html">Specialist roof <br> install service</a></h5>
                        <div class="text">Lorem Ipsum available, but the maj to ority have suffered alterati on in som.</div>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-floor-plan"></div>
                        <div class="big-icon flaticon-floor-plan"></div>
                        <h5><a href="general-contracting.html">Provide creative <br> architects</a></h5>
                        <div class="text">Lorem Ipsum available, but the maj to ority have suffered alterati on in som.</div>
                    </div>
                </div>

            </div>

            <!-- Lower Text -->
            <div class="lower-text">
                <div class="auto-container">
                    <div class="text">If you want watch all service click the button now.</div>
                    <div class="text-center">
                        <a class="btn-style-four theme-btn" href="services.html"><span class="txt">View All Services</span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section Three -->

    <!-- Choose Section -->
    <section class="choose-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-one" style="background-image:url(images/background/pattern-16.png)"></div>
                        <div class="image">
                            <img src="images/resource/choose.jpg" alt="" />
                            <div class="award-box">
                                <div class="inner-box">
                                    <span class="icon flaticon-trophy-2"></span>
                                    201 Awards Winning <br> Constraction Company
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title"><span class="separator"></span>Why Choose Us</div>
                            <h2>We offer best services <br> and solutions</h2>
                            <div class="text">We provide full and specific solutions for our every customers. Construction Providing international construction services company and is a leading builder in diverse market segments. The company has earned recognition for undertaking large, complex projects, fostering innovation, embracing emerging technologies, and making a difference for their clients.</div>
                        </div>
                        <div class="blocks-outer">

                            <!-- Choose Block -->
                            <div class="choose-block">
                                <div class="inner-box">
                                    <div class="icon flaticon-engineer-1"></div>
                                    <h5>Civil & Environmental Services</h5>
                                    <div class="block-text">Part of experts team to manage commercial, institutional, and industrial projects.</div>
                                </div>
                            </div>

                            <!-- Choose Block -->
                            <div class="choose-block">
                                <div class="inner-box">
                                    <div class="icon flaticon-roadblock"></div>
                                    <h5>Energy Saving Methods</h5>
                                    <div class="block-text">Part of experts team to manage commercial, institutional, and industrial projects.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Section -->

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two" style="background-image:url(images/background/pattern-17.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light">
                <div class="title"><span class="separator"></span>Testimoniala</div>
                <h2>See what clients say about us</h2>
            </div>
            <div class="testimonial-carousel-two owl-carousel owl-theme">

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h6>Raymon Myers</h6>
                                <div class="designation">CEO At Laboratory</div>
                            </div>
                        </div>
                        <div class="author-box">
                            <img src="images/resource/author-4.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="text">Interesting design and concept, beautiful presentation and functional features are what make this theme worth your time, money and effort.</div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h6>Smith Makern</h6>
                                <div class="designation">Marketing Manager</div>
                            </div>
                        </div>
                        <div class="author-box">
                            <img src="images/resource/author-5.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="text">The support on this theme is supper amazing. Requested a few changes and everything was done professionally, good theme, good support, great buy</div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h6>Regan Molisa</h6>
                                <div class="designation">Project Manager</div>
                            </div>
                        </div>
                        <div class="author-box">
                            <img src="images/resource/author-4.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h6>Raymon Myers</h6>
                                <div class="designation">CEO At Laboratory</div>
                            </div>
                        </div>
                        <div class="author-box">
                            <img src="images/resource/author-4.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="text">Interesting design and concept, beautiful presentation and functional features are what make this theme worth your time, money and effort.</div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h6>Smith Makern</h6>
                                <div class="designation">Marketing Manager</div>
                            </div>
                        </div>
                        <div class="author-box">
                            <img src="images/resource/author-5.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="text">The support on this theme is supper amazing. Requested a few changes and everything was done professionally, good theme, good support, great buy</div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <h6>Regan Molisa</h6>
                                <div class="designation">Project Manager</div>
                            </div>
                        </div>
                        <div class="author-box">
                            <img src="images/resource/author-4.jpg" alt="" />
                        </div>
                    </div>
                </div>

            </div>

            <!-- Lower Text -->
            <div class="lower-text">Don’t think so more about success rate. <a href="contact.html">Let’s get started</a></div>

        </div>
    </section>
    <!-- End Testimonial Section Two -->

    <!-- Team Section Two -->
    <section class="team-section-two">
        <div class="side-icon">
            <img src="images/resource/team-icon.png" alt="" />
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><span class="separator"></span>Our Expert<span class="separator-two"></span></div>
                <h2>Working with excellent <br> our great team</h2>
            </div>
            <div class="row clearfix">

                <!-- Team Block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team-detail.html"><img src="images/resource/team-4.jpg" /></a>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team-detail.html">Jhon Castellon</a></h5>
                            <div class="designation">Builder Advisor</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team-detail.html"><img src="images/resource/team-5.jpg" /></a>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team-detail.html">Nelson Mecoy </a></h5>
                            <div class="designation">Architecture</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team-detail.html"><img src="images/resource/team-6.jpg" /></a>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team-detail.html">Celsiya Malcom</a></h5>
                            <div class="designation">Marketing Adcisor</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="team-detail.html"><img src="images/resource/team-7.jpg" /></a>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="team-detail.html">Marketing Adcisor</a></h5>
                            <div class="designation">Marketing Adcisor</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team Section Two -->

    <!-- CTA Section Three -->
    <section class="cta-section-three">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <span class="icon flaticon-message-1"></span>
                            Have any questions?
                            <strong>Call: <a href="tel:+800-250-369">800 250 369</a></strong>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="newsletter-form style-two">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                        <button type="submit" class="theme-btn submit-btn"><span class="txt">Submit Now</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section Three -->

    <!-- News Section Three -->
    <section class="news-section-three" style="background-image:url(images/background/pattern-11.png)">
        <div class="auto-container">
            <div class="side-icon">
                <img src="images/resource/news-icon-1.png" alt="" />
            </div>
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><span class="separator"></span>Our Latest News<span class="separator-two"></span></div>
                <h2>You check our latest update <br> with news and artical</h2>
            </div>
            <div class="row clearfix">

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="news-detail.html"><img src="images/resource/news-6.jpg" /></a>
                            <div class="post-date">12 Oct / 21</div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="news-detail.html">High quality work for our customer demond.</a></h4>
                            <ul class="post-info">
                                <li><span class="icon flaticon-user-1"></span>by admin</li>
                                <li><span class="icon flaticon-chat"></span>Comments 02</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="news-detail.html"><img src="images/resource/news-7.jpg" /></a>
                            <div class="post-date">12 Oct / 21</div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="news-detail.html">High quality work for our customer demond.</a></h4>
                            <ul class="post-info">
                                <li><span class="icon flaticon-user-1"></span>by admin</li>
                                <li><span class="icon flaticon-chat"></span>Comments 02</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="news-detail.html"><img src="images/resource/news-8.jpg" /></a>
                            <div class="post-date">12 Oct / 21</div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="news-detail.html">High quality work for our customer demond.</a></h4>
                            <ul class="post-info">
                                <li><span class="icon flaticon-user-1"></span>by admin</li>
                                <li><span class="icon flaticon-chat"></span>Comments 02</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section Three -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!-- Sponsors Carousel -->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- Main Footer -->
    <footer class="footer-style-two" style="background-image:url(images/background/6.jpg)">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget logo-widget">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="images/footer-logo.png" alt="" /></a>
                            </div>
                            <div class="text">A leading developer of A-grade commercial, industrial and residential projects in USA. Since its foundation the company has doubled its turnover year on year with its staff.</div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget news-widget">
                            <h4>Resent Post</h4>
                            <!-- Footer Column -->
                            <div class="widget-content">
                                <div class="post">
                                    <div class="thumb"><a href="news-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                    <h6><a href="news-detail.html">Commercial design <br> for project</a></h6>
                                    <span class="date">August 1, 2021</span>
                                </div>

                                <div class="post">
                                    <div class="thumb"><a href="news-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                    <h6><a href="news-detail.html">Guide to remodeling <br> your building.</a></h6>
                                    <span class="date">August 1, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <h4>Services</h4>
                            <ul class="list-link">
                                <li><a href="apartment-design.html">Construction Manage</a></li>
                                <li><a href="apartment-design.html">Construction Consultants</a></li>
                                <li><a href="apartment-design.html">Architecture & Building</a></li>
                                <li><a href="apartment-design.html">Home Renovations</a></li>
                                <li><a href="apartment-design.html">Tiling & Painiting</a></li>
                                <li><a href="apartment-design.html">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Info Section -->
            <div class="footer-info-section">
                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="icon flaticon-map-1"></div>
                            <div class="text">National Vicksr 88 broklyn <br> golden street, USA</div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="icon flaticon-telephone-2"></div>
                            <ul class="info-list">
                                <li><strong>Email : </strong><a href="mailto:name@yourmail.com">name@yourmail.com</a></li>
                                <li><strong>Phone : </strong><a href="tel:+22-5-789-0001">+22 (5) 789 0001</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="icon flaticon-24-hours"></div>
                            <div class="timing">
                                <strong>Working Hours</strong>
                                Mon-Sat:9.30am To 7.00pm
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
                        <div class="copyright">Copyright &copy; 2021 <a href="https://themeforest.net/user/noor_tech">Kanstr</a> All rights reserved.</div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            <li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!-- Header Search -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
    <button class="close-search"><span class="flaticon-multiply"></span></button>
    <form method="post" action="blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Layout</h6>
    </div>

    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate red-color" data-theme-file="css/color-themes/red-color.css"></span>
        </div>
    </div>

    <h6>RTL Version</h6>
    <ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
    <h6>Boxed Version</h6>
    <ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
    <h6>Want Sticky Header</h6>
    <ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
    <h6>Dark Verion</h6>
    <ul class="dark-version option-box"> <li class="box">Yes</li> <li>No</li></ul>

</div>

<!--Scroll to top-->
<div class="back-to-top scroll-to-target show-back-to-top" data-target="html">TOP</div>

<script src="js/jquery.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>
</html>
