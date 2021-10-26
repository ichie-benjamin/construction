@extends('layouts.app')


@section('content')


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/7.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Contact Us</li>
            </ul>
            <h2>Contact Us</h2>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><span class="separator"></span>Contact Information<span class="separator-two"></span></div>
                <h2>Contact info for our client <br> to get in touch</h2>
            </div>
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon flaticon-maps-and-flags"></div>
                        <strong>Our head office address:</strong>
                        {{ env('address') }} <br> {{ env('country') }}
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon flaticon-telephone-1"></div>
                        <strong>Call for help:</strong>
                        Phone : <a href="tel:{{ env('phone') }}">{{ env('phone') }}</a><br>
{{--                        Support : <a href="tel:+15-2-654-0002">+15 (2) 654 0002</a>--}}
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon flaticon-email-2"></div>
                        <strong>Mail us for information:</strong>
                        Email : <a href="mailto:{{ env('email') }}">{{ env('email') }}</a><br>
{{--                        Phone : <a href="tel:{{ env('phone') }}">{{ env('phone') }}</a>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Faq Page Section -->


@endsection
