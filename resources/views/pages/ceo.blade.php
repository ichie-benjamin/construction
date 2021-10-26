@extends('layouts.app')


@section('content')



    <!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/7.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Our CEO</li>
            </ul>
            <h2>Our CEO</h2>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Team Detail Section -->
    <section class="team-single-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/man15.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>{{ env('ceo') }} <span class="category">CEO</span></h2>

                        <div class="text">
                            He began his professional career in 1999 in the private sector, before serving as head of the London Highways Association (AEC) until
                            turning to business activities in the public sector. Between 1991 and 2005 he held various positions in central and local government,
                            , first as Assistant Director-General at the
                            Ministry of Industry and Energy and Director-General of Transport Infrastructures at the Ministry of Transport.. In 2006 he returned to private enterprise,
                            becoming the Chief Executive Officer {{ env('APP_NAME') }}
                        </div>

                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="list-style-three">
                                    <li>Construction Management</li>
                                    <li>Pre Construction Services</li>
                                    <li>Contract Administration</li>
                                    <li>Online Appointment</li>
                                </ul>
                            </div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="list-style-three">
                                    <li>Professional Approach</li>
                                    <li>High Quality Work</li>
                                    <li>Satisfaction Guarantee</li>
                                    <li>Online Payment</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Social Box -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team Detail Section -->


@endsection
