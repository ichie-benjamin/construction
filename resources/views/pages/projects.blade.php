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
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All works</li>
                        <li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
                        <li class="filter" data-role="button" data-filter=".road">Roads</li>
                        <li class="filter" data-role="button" data-filter=".education">Education</li>
                        <li class="filter" data-role="button" data-filter=".hospital">Hospital</li>
                        <li class="filter" data-role="button" data-filter=".residential">Residential</li>
                        <li class="filter" data-role="button" data-filter=".office">Office</li>
                        <li class="filter" data-role="button" data-filter=".construction">Construction</li>
                    </ul>
                </div>

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

                    <!--Gallery Item Two-->
                    <div class="gallery-item-two masonry-item all office col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/10.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/10.jpg" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!--Gallery Item Two-->
                    <div class="gallery-item-two masonry-item all education residential commercial col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/11.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">

                                            <a href="images/gallery/11.jpg" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!--Gallery Item Two-->
                    <div class="gallery-item-two masonry-item construction hospital office all col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/12.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">

                                            <a href="images/gallery/12.jpg" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!--Gallery Item Two-->
                    <div class="gallery-item-two masonry-item hospital constructionall commercial col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/14.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">

                                            <a href="images/gallery/14.jpg" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!--Gallery Item Two-->
                    <div class="gallery-item-two masonry-item all education residential col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/13.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">

                                            <a href="images/gallery/13.jpg" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!--Gallery Item Two-->
                    <div class="gallery-item-two masonry-item all hospital residential education col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/15.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">

                                            <a href="images/gallery/15.jpg" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!--Gallery Item Two-->
                    <div class="gallery-item-two masonry-item construction all col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/16.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">

                                            <a href="images/gallery/16.jpg" data-fancybox="images" data-caption="" class="link lightbox-image"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!--End Project Section Two-->

@endsection
