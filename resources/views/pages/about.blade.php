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

    <!--Approach Section-->
    <section class="approach-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>About {{ env('APP_NAME') }}</h2>
                        </div>
                        <div class="styled-text text-justify">{{ env('APP_NAME') }} groups is a proven leader in global aerospace sector.
                            These cutting-edge products and services – which span the commercial aircraft, helicopter,
                            defence, security and space segments – benefit from our wide-ranging expertise and
                            continued emphasis on innovation.
                        </div>
                        <div class="text text-justify">
                            <p>
                                Setting the standard for modern aviation is a top priority for Airbus.
                                Making it safer, cleaner and more fuel-efficient thanks to our products, services and customer care,
                                while ensuring our customers' needs are covered all over the world is our commitment.
                                {{ env('ceo') }} has an amazing team of in-house architects, engineers, and construction managers.
                                We have the best team to deliver your basement conversions.

                                We are regularly audited by independent experts to ensure we hit the highest technical, and health & safety standards.
                                We make a computer 3D model and simulation of the build. This help us to solve design issues before we even start on site.


                            </p>
                            <p>Our construction company specialist waterproofing in-house team will design and install it all wrapped up in a 10-year insurance-backed guarantee.

                                We deliver quality with a passion to every basement conversion, building construction, and civil engineering project world-wide

                            </p>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                                Override the digital divide with additional clickthroughs from DevOps.
                                Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>

                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="images/man.png" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Approach Section-->

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
                    <h2>We're knowledgeable about <br> what we do </h2>
                    <div class="bold-text">SETTING STANDARDS IN DESIGN & CONSTRUCTION SINCE 1999</div>
                    <div class="text">
                        {{ env('APP_NAME') }} has built a reputation for excellence in every aspect of the work we deliver.
                        Whether it is health & safety, quality of finish or overall results for our clients,
                        we use our expertise across all projects to ensure excellence in everything that we do.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fluid Section One-->

    <!--Contruction Section-->
    <section class="contruction-section" style="background-image:url(images/ser/6.jpeg)">
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
                        <h2> <span class="theme_color">Construction </span> Excellence</h2>
                        <div class="text">
                            <p>
                                {{ env('APP_NAME') }} has built a reputation for excellence in every aspect of the work we deliver.
                                Whether it is health & safety, quality of finish or overall results for our clients,
                                we use our expertise across all projects to ensure excellence in everything that we do.</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contruction Section-->

    <section class="renovation-section" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <h3>Caring <span>for a </span> cleaner way to fly.</h3>

            <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Contact us now</a>
        </div>
    </section>
    <!--End Renovation Section-->


@endsection
