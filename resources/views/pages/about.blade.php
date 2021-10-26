@extends('layouts.app')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/7.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>About</li>
            </ul>
            <h2>About Us</h2>
        </div>
    </section>
    <!-- End Page Title -->

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
                            <h2>A construction company that understands the importance & value of Client satisfaction</h2>
                            <div class="text">
                                Our company prides itself on customer satisfaction: working hard to ensure all customers’ needs and expectations are fulfilled.
                            </div>
                            <div class="text">
                                We tailor services to individual needs, such as: scheduling and carrying out work at hours which suit the Client; accommodating tight
                                deadlines and altering initial arrangements or job specifications.
                                Furthermore, we strive to provide competitive rates without sacrificing quality.
                            </div>
                            <div class="text">
                                80% of our new clients are referred to us by our existing Clients. </div>

                            <div class="text">
                                We ensure a job is done on time and on budget.
                            </div>
                            <!--                            <div class="text">Manufactoriuring industry became a key sector of production and labour and <br> North American countries during the Industrial Revolution.</div>-->
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
                                    <img src="images/man3.png" alt="">
                                </div>
                                <div class="signature">
                                    <img src="images/icons/signature-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="images/man5.png" alt="">
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="counter-section-two">
        <div class="auto-container">
            <!-- Fact Counter -->
            <div class="fact-counter-two">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="content">
                                <div class="icon flaticon-planet-earth-1"></div>
                                <div class="counter-title">Satisfied Clients</div>
                                <div class="count-outer count-box counted">
                                    <span class="count-text" data-speed="3500" data-stop="{{ env('satisfied_clients') }}">{{ env('satisfied_clients') }}</span>+
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                            <div class="content">
                                <div class="icon flaticon-project-management"></div>
                                <div class="counter-title">Active projects</div>
                                <div class="count-outer count-box counted">
                                    <span class="count-text" data-speed="2500" data-stop="{{ env('active_projects') }}">{{ env('active_projects') }}</span>+
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="900ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 900ms; animation-name: fadeInLeft;">
                            <div class="content">
                                <div class="icon flaticon-engineer"></div>
                                <div class="counter-title">Engineer Members</div>
                                <div class="count-outer count-box counted">
                                    <span class="count-text" data-speed="3500" data-stop="{{ env('workers') }}">{{ env('workers') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="goal-section">
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
                            <div class="title"><span class="separator"></span>Our Goal</div>
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

    <section class="process-section" style="background-image:url(images/background/pattern-8.png)">
        <div class="side-icon">
            <img src="images/resource/process-icon.png" alt="">
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><span class="separator"></span>Working Process<span class="separator-two"></span></div>
                <h2>How do we work factory <br> provide service</h2>
            </div>
            <div class="row clearfix">

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow flipInY animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: flipInY;">
                        <div class="process-number">01</div>
                        <div class="color-layer"></div>
                        <div class="color-layer-two"></div>
                        <div class="icon flaticon-industrial-robot"></div>
                        <h5>Research and <br> Analysis</h5>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow flipInY animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: flipInY;">
                        <div class="process-number">02</div>
                        <div class="color-layer"></div>
                        <div class="color-layer-two"></div>
                        <div class="icon flaticon-factory"></div>
                        <h5>Industry <br> Development</h5>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow flipInY animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: flipInY;">
                        <div class="process-number">03</div>
                        <div class="color-layer"></div>
                        <div class="color-layer-two"></div>
                        <div class="icon flaticon-electric-car"></div>
                        <h5>Production <br> / Deployment</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Skill Section -->
    <section class="skill-section style-two">
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


@endsection
