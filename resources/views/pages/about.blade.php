@extends('layouts.app')

@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-2.jpg)">
        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <!--Contruction Section-->
    <section class="contruction-section" style="background-image:url(images/background/3.png)">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/men2.jpg" alt="" />
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2 class="text-uppercase">PROFESSIONAL BEHIND {{ env('APP_NAME') }} ({{ env('ceo') }})</h2>

                        <div class="text text-justify">


                            <p>Applying aircraft safety for our repairs and maintenance and oiling of engines and others.</p>
                            <p>
                                Your first choice expert to call for anything maintenance and servicing of any private Aircraft. As an Aircraft engineer,
                                I render the best of service required to keep your aircraft in proper safety and maintenance along with handling total over hauling. </p>
                        </div>

                        <div class="row clearfix fact-counter about p-2">

                            <!--Column-->
                            <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="{{ env('exp') }}">0</span>
                                    </div>
                                    <h4 class="counter-title">Years of Experience</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="{{ env('active_projects') }}">0</span>+
                                    </div>
                                    <h4 class="counter-title">Successful Projects</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="{{ env('satisfied_clients') }}">0</span>
                                    </div>
                                    <h4 class="counter-title">Satisfied Customers</h4>
                                </div>
                            </div>

                        </div>

                        <a href="{{ route('about') }}" class="theme-btn btn-style-two">Know more about {{ env('ceo') }}</a>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contruction Section-->


    <!--Fluid Section One-->
    <section class="fluid-section-one" style="background-image:url(images/ser/6.jpg)">
        <div class="outer-container clearfix">
            <!--Image Column-->
            <div class="image-column" style="background-image:url(images/ser/6.jpg);">
                <figure class="image-box"><img src="images/ser/6.jpg" alt=""></figure>
            </div>
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">

                        <h3> <span>{{ env('exp') }}</span> YEARS AS AN EXPERT AERONAUTICAL ENGINEER </h3>
                        <h2>NEXT Generation Aircraft Consultant
                        </h2>
                        <p style="color: white" class="text-white">As an independent contractor we ensure that individuals are able to manage their aircraft
                            and do the necessary repairs for their Aircrafts. Contact us today so we can see how we can be of help. </p>
                        <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Contact us now</a>

                </div>
            </div>
        </div>
    </section>
    <!--End Fluid Section One-->



    <!--Services Section Two-->
    <section class="services-section-two" style="background-image:url(images/background/1.png)">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Our Expertise</h2>
                <div class="text">

                    From traditional, single main rotor helicopters to small,
                    multirotor drones, aeropartsconsult provides a number of unique challenges regarding simulation –
                    whether the focus of simulation is to support training, research, engineering, or something else.
                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">

                <!--Services Block Two-->
                @foreach($c_services as $item)
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="flip-container" >
                                <div class="flipper">
                                    <div class="front">

                                        <h3>{{ $item['name'] }}</h3>
                                        <div class="text">{{ $item['info'] }}.</div>
                                    </div>

                                    <div class="back">
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="overlay-content">
                                                    <h4><a href="">{{ $item['name'] }};</a></h4>
                                                    <div class="overlay-text">{{ $item['info'] }}</div>
                                                    <a href="{{ route('services') }}" class="read-more">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--End Services Section Two-->




    <!--Contruction Section-->
    <section class="contruction-section" style="background-image:url(images/background/3.png)">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/man.png" alt="" />
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Area of Specialization</h2>
                        <div class="text text-justify">

                            <p>
                                We guarantee a supportive and friendly environment with a motivating professional team. This is how we are able to innovate, restructure and redesign aircraft to fly more safe and efficient.
                                Aircraft maintenance subscribed to my maintenance are queued in weekly for checks and rechecks.
                            </p>
                        </div>
                        {{--                        <a href="{{ route('about') }}" class="theme-btn btn-style-two">Know more about us</a>--}}

                        <h2>Aircraft Specialist</h2>
                        <div class="text text-justify">
                            We bring the swift maintenance for all Aircrafts and ensure maintenance are
                            carried out with standard protocol in place to ensure safety.</div>

                        <h2> Aircraft Consultant</h2>
                        <div class="text text-justify">

                            We ensure flight safety and maintenance are properly
                            managed in the hanger. We also give flight traveling tips and training for certified pilots.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contruction Section-->




    <!--Services Section Two-->
    <section class="services-section-two" style="background-image:url(images/background/1.png)">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Awards & Recognitions</h2>
                <div class="text">
                    Our Expertise has Ranked us as best Safety Trainer and Aircraft Engineer for several years
                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">

                <!--Services Block Two-->
                @foreach($awards as $item)
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="flip-container" >
                                <div class="flipper">
                                    <div class="front">

                                        <h3>{{ $item['name'] }}</h3>
                                        <div class="text">{{ $item['info'] }}.</div>
                                    </div>

                                    <div class="back">
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="overlay-content">
                                                    <h4><a href="">{{ $item['name'] }};</a></h4>
                                                    <div class="overlay-text">{{ $item['info'] }}</div>
{{--                                                    <a href="{{ route('services') }}" class="read-more">Read more</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--End Services Section Two-->





    <section class="renovation-section" style="background-image:url(images/ser/6.jpg)">
        <div class="auto-container">
            <h3>Caring <span>for a </span> cleaner way to fly.</h3>

            <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Contact us now</a>
        </div>
    </section>
    <!--End Renovation Section-->




    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="auto-container">
            <!--Sec Title Two-->
            <div class="sec-title-two centered">
                <h2>What our client says</h2>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme">


                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/test.jpg" alt="" />
                        </div>
                        <div class="text">I have dealt with multiple professional organizations over the last 45 years.
                            But only a few of them performed to the level of dedication, responsiveness, thoroughness, diligence, and customer focus that yours has.  Thanks again for your support.
                            Please pass along my appreciation for a job well done to all that helped me through this process. </div>
                        <div class="author-name">- JJ Suarez, Ohio</div>
                        {{--                        <div class="author-designation">Ceo of Mart</div>--}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="text">It was classic maintaining my Aircraft with Aero parts Consult.
                            The response was  VFR fast and effectively. Thank you!

                        </div>
                        <div class="author-name">-  Blaine Sweatt, Florida

                        </div>
                        {{--                        <div class="author-designation">Ceo of Mart</div>--}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-2.jpg" alt="" />
                        </div>
                        <div class="text">My company was finally able to get a well informed engineer after series of troubles
                            finding an Aeronautical Engineer
                        </div>
                        <div class="author-name">- Malte Lorenz, New York</div>
                        {{--                        <div class="author-designation">Ceo of Mart</div>--}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="text">Thanks to this awesome engineer.  He was able to do my Aircraft repainting
                            and oil changing. You are great! </div>
                        <div class="author-name">-  Paul Teirstein, MD, California</div>
                        {{--                        <div class="author-designation">Ceo of Mart</div>--}}
                    </div>
                </div>

                <!--Testimonial Block-->


            </div>
        </div>
    </section>
    <!--End Testimonial Section-->



@endsection
