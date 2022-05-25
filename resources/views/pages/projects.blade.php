@extends('layouts.app')


@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/12.jpg)">
        <div class="auto-container">
            <h1>Projects</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Section-->
    <section class="project-section">
        <div class="auto-container">

            <!--Sec Title-->
            <div class="sec-title">
                <h2>Our Projects</h2>
            </div>

            <!--Sortable Masonry-->
            <div class="sortable-masonry">

                <!--Filter-->


                <div class="items-container row clearfix">

                    <!--Gallery Item Two-->
                    @foreach($projects as $item)
                    <div class="gallery-item-two masonry-item all {{ $item['type'] }} office col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ $item['img'] }}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">

                                            <a href="{{ $item['img'] }}" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                @endforeach

                </div>

            </div>

        </div>
    </section>
    <!--End Project Section Two-->

@endsection
