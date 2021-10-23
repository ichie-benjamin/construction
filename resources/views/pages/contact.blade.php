@extends('layouts.app')


@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/12.jpg)">
        <div class="auto-container">
            <div class="info-bubble clearfix">
                <div class="info-inner">
                    <h2>{{ env('APP_NAME') }}.</h2>
                    <div class="row clearfix">
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="text">{{ env('address') }} {{ env('country') }}</div>
                        </div>
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="text">{{ env('email') }} {{ env('phone') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Drop us messge for any query</h2>
            </div>
            <div class="row clearfix">

                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">

                        <!--Contact Form-->
                        <div class="default-form contact-form">
                            <form method="post" action="#" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="firstname" value="" placeholder="Your name" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Your email address" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone number" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Subject" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Type your massage here..."></textarea>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">Submit now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Contact Form-->

                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>{{ env('APP_NAME') }}</h2>
                        <ul class="list-style-three">
                            <li><span class="icon fa fa-map-marker"></span>{{ env('address') }} <br>	{{ env('country') }}</li>
                            <li><span class="icon fa fa-phone"></span>{{ env('phone') }}</li>
                            <li><span class="icon fa fa-envelope"></span>{{ env('email') }}</li>
                        </ul>
                        <h3>Office Time</h3>
                        <div class="times">Mon-Wed : 10.00 am to 6.00 pm <br> Thus-Sat : 12.00 pm to 8.00 pm <br> Sun : Office Off</div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--End Contact Section-->


@endsection
