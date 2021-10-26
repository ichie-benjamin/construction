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

    <!--Call To Action Section-->
    <section class="call-to-action-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="column col-md-9 col-sm-12 col-xs-12">
                    <h2>Looking For a 100% <span>Quality</span> And <span>Affordable</span> Constructor For Your Project?</h2>
                </div>

                <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                    <a href="contact.html" class="theme-btn btn-style-three">Contact Us</a>
                </div>

            </div>
        </div>
    </section>
    <!--Call End To Action Section-->

@endsection
