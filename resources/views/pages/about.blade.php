@extends('layouts.app')

@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/ser/road4.jpeg)">
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
                        <div class="styled-text text-justify">We operate an integrated business model comprising the full range of engineering,
                            construction and asset management
                            services delivering single-source solutions for some of the world's most prestigious public and private organisations.</div>
                        <div class="text text-justify">
                            <p> {{ env('APP_NAME') }} has been building  basement conversions and civil engineering projects for {{ env('exp') }} years.
                                {{ env('ceo') }} has an amazing team of in-house architects, engineers, and construction managers.
                                We have the best team to deliver your basement conversions.

                                We are regularly audited by independent experts to ensure we hit the highest technical, and health & safety standards.
                                We make a computer 3D model and simulation of the build. This help us to solve design issues before we even start on site.
                                It is also useful to sequence every basement conversion project and civil engineering project perfectly.

                                {{ env('APP_NAME') }} has won many construction awards like Construction News ‘Contractor of the year’, the CN “Digital Contractor of the Year” and Ground Engineering Contractor of the Year.

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
                            <img src="images/sam11.png" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Approach Section-->

    <!--Fluid Section One-->
    <section class="fluid-section-one" style="background-image:url(images/resource/image-4.jpg)">
        <div class="outer-container clearfix">
            <!--Image Column-->
            <div class="image-column" style="background-image:url(images/resource/image-3.jpg);">
                <figure class="image-box"><img src="images/resource/image-3.jpg" alt=""></figure>
            </div>
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <h2>We're knowledgeable about <br> what we do </h2>
                    <div class="bold-text">SETTING STANDARDS IN DESIGN & CONSTRUCTION SINCE 1990</div>
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
    <section class="contruction-section" style="background-image:url(images/background/3.png)">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/sam.png" alt="" />
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
            <h3>Great <span>Experience</span> for Building </h3>
            <h2>Construction & Renovation</h2>
            <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Contact us now</a>
        </div>
    </section>
    <!--End Renovation Section-->


@endsection
