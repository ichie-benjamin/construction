@extends('layouts.app')


@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/7.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Our Projects</li>
            </ul>
            <h2>Our Projects</h2>
        </div>
    </section>
    <!-- End Page Title -->

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



    <!-- Project Section -->
    <section class="project-section" id="projects">
        <div class="side-image">
            <img src="/images/resource/project.png" alt="" />
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><span class="separator"></span>Our Project<span class="separator-two"></span></div>
                <h2>Transforming the ideas & <br> visions for industries!</h2>
            </div>
            <!-- MixitUp Galery -->
            <div class="mixitup-gallery">

                <!-- Filter -->
                <div class="filters clearfix">

                    <ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">ALL PROJECTS</li>
                        <li class="filter" data-role="button" data-filter=".architecture">ARCHITECTURE</li>
                        <li class="filter" data-role="button" data-filter=".building">BUILDING</li>
                        <li class="filter" data-role="button" data-filter=".construction">CONSTRUCTION</li>
                        <li class="filter" data-role="button" data-filter=".industrial">INDUSTRIAL</li>
                    </ul>

                </div>

                <div class="filter-list row clearfix">

                    <!-- Gallery Block -->
                    <div class="gallery-block all mix industrial building construction col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="/images/gallery/1.jpg" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                            {{--                                            <a href="portfolio-detail.html" class="icon flaticon-link"></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="title">ARCHITECTURE</div>
                                {{--                                <h5><a href="portfolio-detail.html">The Burj Khalifa</a></h5>--}}
                            </div>
                        </div>
                    </div>

                    <div class="gallery-block all mix industrial building construction col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="/images/road.jpg" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/road.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                            {{--                                            <a href="portfolio-detail.html" class="icon flaticon-link"></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="title">ARCHITECTURE</div>
                                {{--                                <h5><a href="portfolio-detail.html">The Burj Khalifa</a></h5>--}}
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block all mix construction col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="/images/gallery/2.jpg" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                            {{--                                            <a href="portfolio-detail.html" class="icon flaticon-link"></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="title">CONSTRUCTION</div>
                                {{--                                <h5><a href="portfolio-detail.html">Federation Tower</a></h5>--}}
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block all mix industrial architecture col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="/images/gallery/3.jpg" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                            {{--                                            <a href="portfolio-detail.html" class="icon flaticon-link"></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="title">Building</div>
                                {{--                                <h5><a href="portfolio-detail.html">Shun Hing Square</a></h5>--}}
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block all mix architecture construction industrial col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="/images/gallery/4.jpg" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                            {{--                                            <a href="portfolio-detail.html" class="icon flaticon-link"></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="title">ARCHITECTURE</div>
                                {{--                                <h5><a href="portfolio-detail.html">indus tower</a></h5>--}}
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block all mix building col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="/images/gallery/5.jpg" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                            {{--                                            <a href="portfolio-detail.html" class="icon flaticon-link"></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="title">CONSTRUCTION</div>
                                {{--                                <h5><a href="portfolio-detail.html">Vigamont Tower</a></h5>--}}
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block all mix architecture col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="/images/gallery/6.jpg" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/6.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                            {{--                                            <a href="portfolio-detail.html" class="icon flaticon-link"></a>--}}
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="title">Building</div>
                                {{--                                <h5><a href="portfolio-detail.html">Moll Royal cage</a></h5>--}}
                            </div>
                        </div>
                    </div>

                </div>

                {{--                <div class="btn-box text-center">--}}
                {{--                    <a href="#contact" class="theme-btn btn-style-four"><span class="txt">View All Project</span></a>--}}
                {{--                </div>--}}

            </div>
        </div>
    </section>
    <!-- End Project Section -->

    <!-- CTA Section -->
    <section class="cta-section" style="background-image:url(images/background/1.jpg)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="title-box">
                <h2>We Provide High Perfomance Innovate <br> Machines Profitable Solutions</h2>
            </div>
            <ul class="cta-list">
                <li>Technologies</li>
                <li>Industries</li>
                <li>Factory</li>
            </ul>
            <div class="btn-box text-center">
                <a class="btn-style-five theme-btn" href="about.html"><span class="txt">Read More</span></a>
                <a class="btn-style-six theme-btn" href="#contact"><span class="txt">Contact Now</span></a>
            </div>
        </div>
    </section>
    <!-- End CTA Section -->

@endsection
