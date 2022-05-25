@extends('layouts.app')


@section('content')



    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/12.jpg)">
        <div class="auto-container">
            <h1>Services</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Services Section Three-->
    <section class="services-section-three alternate">
        <div class="auto-container">
            <!--Title Box-->
            <div class="title-box">
                <h2>What we do</h2>
                <div class="styled-text">We help customers built World Class Construction Projects Since 1999</div>
                <div class="text">We provide a bespoke service based on the individual requirements.
                    Whatever structural or landscaping package is required for our clients' needs,
                    we will structure our response to ensure that we exceed our clients’ expectations..</div>
            </div>

            <div class="row clearfix">

                @foreach($services as $item)
                <!--Services Block Three-->
                <div class="service-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img style="height: 250px" src="{{ $item['img'] }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">{{ $item['name'] }}</a></h3>
                            <div class="text">{{ $item['info'] }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
    <!--End Services Section Three-->



    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container projects">
            <div class="sec-title light">
                <h2>Our Projects</h2>
            </div>
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                {{--                <div class="filters clearfix">--}}

                {{--                    <ul class="filter-tabs filter-btns clearfix">--}}
                {{--                        <li class="active filter" data-role="button" data-filter="all">All</li>--}}
                {{--                        <li class="filter" data-role="button" data-filter=".road">Roads</li>--}}
                {{--                        <li class="filter" data-role="button" data-filter=".commercial">Commercial</li>--}}
                {{--                        <li class="filter" data-role="button" data-filter=".education">Education</li>--}}
                {{--                        <li class="filter" data-role="button" data-filter=".hospital">Hospital</li>--}}
                {{--                        <li class="filter" data-role="button" data-filter=".residential">Residential</li>--}}
                {{--                        <li class="filter" data-role="button" data-filter=".office">Office</li>--}}
                {{--                        <li class="filter" data-role="button" data-filter=".construction">Construction</li>--}}
                {{--                    </ul>--}}

                {{--                </div>--}}

                <div class="filter-list row clearfix">

                    <!--Gallery Item-->
                    @foreach($projects as $item)
                        <div class="gallery-item mix all {{ $item['type'] }} col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img style="max-height: 500px" src="{{ $item['img'] }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                            <h3><a href="#">{{ $item['name'] }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3>{{ $item['name'] }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->


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

    <!--Call To Action Section-->
    <section class="call-to-action-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="column col-md-9 col-sm-12 col-xs-12">
                    <h2>
                        For more inquiry please endeavor to write us and let us know how we can be
                        of assistance and we would get back to you as soon as possible.
                    </h2>
                </div>

                <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                    <a href="{{ route('contact') }}" class="theme-btn btn-style-three">Contact Us</a>
                </div>

            </div>
        </div>
    </section>
    <!--Call End To Action Section-->


@endsection
