@extends('layouts.app')

@section('content')

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
                                <a href="{{ route('home') }}"><img src="/images/logo-2.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">{{ env('APP_NAME') }} is a worldwide reference in the construction and infrastructure development industries, both civil and industrial. Since 2013 {{ env('APP_NAME') }} leads the ENR ranking of International Contractors</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>{{ env('address') }}, {{ env('country') }}</li>
                                    <li><span class="icon fa fa-phone"></span>{{ env('phone') }}</li>
                                    <li><span class="icon fa fa-envelope"></span>{{ env('email') }}</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
{{--                            <ul class="social-box">--}}
{{--                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>--}}
{{--                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>--}}
{{--                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>--}}
{{--                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>--}}
{{--                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>--}}
{{--                            </ul>--}}
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
{{--                                <div class="image">--}}
{{--                                    <img src="images/man1.png" alt="" />--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">We Are Experienced </div>
                                <h1>Always delivers  <br> beyond client expectation</h1>
                                <div class="text">We produce positive results from ever-growing Industrial & <br>
                                    manufacturing, we have established a corporate mandate to maintain.</div>
                                <div class="clearfix">
{{--                                    <div class="btns-box">--}}
{{--                                        <a class="btn-style-three theme-btn" href="about.html"><span class="txt">Read More</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="play-box">--}}
{{--                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>--}}
{{--                                        See Our Achivity--}}
{{--                                    </div>--}}
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
{{--                                <div class="image">--}}
{{--                                    <img src="images/man5.png" alt="" />--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">{{ env('APP_NAME') }}</div>
                                <h1>The no.1 <br> </h1>
                                <div class="text">A worldwide reference in the industry of infrastructure development,  <br/>
                                    both civil and industrial engineering projects</div>
                                <div class="clearfix">
{{--                                    <div class="btns-box">--}}
{{--                                        <a class="btn-style-three theme-btn" href="about.html"><span class="txt">Read More</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="play-box">--}}
{{--                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>--}}
{{--                                        See Our Achivity--}}
{{--                                    </div>--}}
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
{{--                                <div class="image">--}}
{{--                                    <img src="images/man2.png" alt="" />--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 cl-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title">{{ env('APP_NAME') }}</div>
                                <h1>With Over {{ env('exp') }} <br> </h1>
                                <div class="text">We specializes in design and delivery of stylish and contemporary luxury homes,
                                    all over the world.
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Main Slider Section -->

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="auto-container">
            <div class="inner-container" style="background-image:url(images/background/pattern-1.png)">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title"><span class="separator"></span>About </div>
                                <h2>{{ env('APP_NAME') }}</h2>
                            </div>
                            <div class="text">
                                <p>{{ env('APP_NAME') }} is a worldwide reference in the construction and infrastructure development industries, both civil and industrial. Since 1999
                                    {{ env('APP_NAME') }} leads the ENR ranking of International Contractors</p>
                                <!--								<p>mercantile and feudal ecoan countries during the Industrial Revolution, mercantile and feudal economies.</p>-->
                            </div>
                            <div class="clearfix">
{{--                                <div class="pull-left">--}}
{{--                                    <a class="btn-style-four theme-btn" href="about.html"><span class="txt">Read More</span></a>--}}
{{--                                </div>--}}
                                <div class="pull-left">
                                    <div class="signature">
                                        <img src="/images/icons/signature.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="/images/man3.png" alt="" />
                                <!-- Experiance Box -->
                                <div class="experiance-box">
                                    <div class="box-inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3500" data-stop="{{ env('exp') }}">0</span>+
                                        </div>
                                        <h6>Year OF <br> Experience</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->


    <!-- Services Section -->
    <section class="services-section" id="services">
{{--        <div class="side-image">--}}
{{--            <img src="/images/man1.png" alt="" />--}}
{{--        </div>--}}
        <div class="auto-container">
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title"><span class="separator"></span>Our Services</div>
                        <h2>Construction solutions <br> for residentials & industries!</h2>
                    </div>

                </div>
            </div>
            <div class="services-carousel owl-carousel owl-theme">

                <!-- Service Block -->
                <div class="service-block">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO7Ptxp6Bsvtd6uYLdSuwJSP9wuvpeWp7Yhw&usqp=CAU" alt="">
                    <div class="inner-box">
                        <div class="pattern-layer" ></div>
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon f"></span>
                            </div>
                            <h4><a href="#">Hotels <br>Design/Construction</a></h4>
                            <div class="text">
                                Construction Management is a service that uses specialized, project management techniques to manage the planning, design, and construction of a project, from start to finish. The main purpose is to control the project’s time, cost and quality.
                            </div>
                        </div>
{{--                        <a class="read-more" href="#">Read More</a>--}}
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <img src="/images/house.jpg" alt="">
                    <div class="inner-box">
                        <div class="pattern-layer" ></div>
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon "></span>
                            </div>
                            <h4><a href="#">Real Estate <br>Design/ Construction</a></h4>
                            <div class="text">
                                Over the years we’ve developed everything from single office buildings to business parks, individual retail units to large shopping centres. Our high-quality, sustainable developments bring benefits and value to the businesses and people who occupy them. Our focus is always on decisive, speedy deal making.
                            </div>
                        </div>
{{--                        <a class="read-more" href="#">Read More</a>--}}
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <img style="height: 280px" src="/images/road.jpg" alt="">
                    <div class="inner-box">
                        <div class="pattern-layer" ></div>
                        <div class="content">
                            <div class="icon-box">
                                <span class=""></span>
                            </div>
                            <h4><a href="#">Road <br> Construction</a></h4>
                            <div class="text">
                                This involves the paving, rehabilitation, and/or reclamation of degraded pavements in order to achieve a state of good repair and increase road traffic safety
                            </div>
                        </div>
{{--                        <a class="read-more" href="#">Read More</a>--}}
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block">
                    <img src="/images/mall.jpg" alt="">
                    <div class="inner-box">
                        <div class="pattern-layer" ></div>
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-excavatr"></span>
                            </div>
                            <h4><a href="#">Malls <br>Design/Construction</a></h4>
                            <div class="text">
                                our many years as a construction manager form a strong foundation for our design/build services. We draw upon our experience with the industry’s leading design firms to create an integrated design/build team customized to the needs and goals of your project
                            </div>
                        </div>
{{--                        <a class="read-more" href="#">Read More</a>--}}
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <section id="ourgoal" class="goal-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <div class="dark-layer"></div>
                            <img src="/images/man5.png" alt="">
                        </div>
                        <div class="pattern-layer" style="background-image:url(images/background/pattern-7.png)"></div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title"><span class="separator"></span>What Our Goal</div>
                            <h2>Why {{ env("ceo") }} is the best in the <br> construction industry</h2>
                            <div class="text">
                                He began his professional career in 1999 in the private sector, before serving as head of the Spanish Highways Association (AEC) until
                                turning to business activities in the public sector. Between 1991 and 2005 he held various positions in central and local government,
                                , first as Assistant Director-General at the
                                Ministry of Industry and Energy and Director-General of Transport Infrastructures at the Ministry of Transport.. In 2006 he returned to private enterprise,
                                becoming the Chief Executive Officer {{ env('APP_NAME') }}
                            </div>
                        </div>
                        <div class="row clearfix">

                            <!-- Goal Block -->
                            <div class="goal-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon flaticon-engineer-1"></div>
                                    <h4>Industrial Mission</h4>
                                    <div class="goal-text">
                                        We pride ourselves in our experienced, dedicated and committed personnel who possess the knowledge, skills and abilities required to deliver exceptional projects.
                                    </div>
                                </div>
                            </div>

                            <!-- Goal Block -->
                            <div class="goal-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon flaticon-setting"></div>
                                    <h4>Our Vision</h4>
                                    <div class="goal-text">
                                        Our Mission is to consistently exceed our clients expectations by delivering the highest quality construction service in an ethical manner by so doing gain the trust of all stakeholders.

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>
        <br>




    </section>

    <!-- Counter Section -->
    <section class="counter-section" style="background-image:url(images/background/1.jpg)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title"><span class="separator"></span>Progress<span class="separator-two"></span></div>
                <h2>What we have achive</h2>
            </div>

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-planet-earth-1"></div>
                                <div class="counter-title">Satisfied Clients</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3500" data-stop="{{ env('satisfied_clients') }}">0</span>+
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-project-management"></div>
                                <div class="counter-title">Active projects</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="{{ env('active_projects') }}">0</span>+
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Column -->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-engineer"></div>
                                <div class="counter-title">Engineer Members</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3500" data-stop="{{ env('workers') }}">0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Skill Section -->
    <section class="skill-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <div class="pattern-layer" style="background-image:url(images/background/pattern-2.png)"></div>
                                <img src="/images/man3.png" alt="" />
                                <div class="text"> Awards winning Contracts</div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill Column -->
                    <div class="skill-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title"><span class="separator"></span>Our Skills View</div>
                                <p>All {{ env('APP_NAME') }} activities show a determined customer orientation, with a contracting culture and as a guarantee for future, building solid long-term relationships based on trust and mutual knowledge. </p>
                                <div class="text"></div>
                            </div>

                            <!-- Skills -->
                            <div class="skills">

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Engineering</div>
                                        <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div></div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Architecture</div>
                                        <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div></div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Construction</div>
                                        <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div></div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                                    </div>
                                </div>

                            </div>

                            <div class="btn-box">
                                <a href='#about' class="theme-btn btn-style-one"><span class="txt">About Us</span></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Section -->

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

    @section('hide')
    <!-- Testimonial Section -->
    <section id="testimony" class="testimonial-section" style="background-image:url(images/background/pattern-3.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title"><span class="separator"></span>Testimoniala</div>
                <h2>See what clients say <br> about us</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="author-image-outer">
                            <div class="author-image">
                                <img src="/images/resource/author-1.jpg" alt="" />
                            </div>
                            <h6>Raymon Myers</h6>
                            <div class="designation">CEO At Laboratory</div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="author-image-outer">
                            <div class="author-image">
                                <img src="/images/resource/author-2.jpg" alt="" />
                            </div>
                            <h6>Smith Makern </h6>
                            <div class="designation">CEO At Laboratory</div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="author-image-outer">
                            <div class="author-image">
                                <img src="/images/resource/author-1.jpg" alt="" />
                            </div>
                            <h6>Raymon Myers</h6>
                            <div class="designation">CEO At Laboratory</div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <div class="author-image-outer">
                            <div class="author-image">
                                <img src="/images/resource/author-2.jpg" alt="" />
                            </div>
                            <h6>Smith Makern </h6>
                            <div class="designation">CEO At Laboratory</div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="text">Don’t buy this theme, you won’t be able to resist its charm. Right, like you’re charmed. A theme that is truly multipurpose and flexible.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
    @endsection


@endsection
