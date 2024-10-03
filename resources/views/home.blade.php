@extends('layouts.app')

@section('title', 'AETH | Home') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/gallery/1.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>@lang('header.complete_aeth_name')</h1>
        </div>
    </div>
</section>
<section class="faq-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 video-column" style="margin-top:100px;">
                <div class="video-content p_relative d_block mr_30">
                    <div class="video-inner centred"
                        style="background-image: url(assets/images/gallery/somosaeth3.jpg);">
                        <div class="video-btn">
                            <a href="https://vimeo.com/767301063" class="lightbox-image" data-caption=""><i
                                    class="fas fa-play" style="margin-top:25px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column" style="margin-top:100px;">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2>xxxxx</h2>
                        </div>
                        <div class="text mb_40">
                            <p>aaaaaaaa</p>
                            <p>bbbbbbbbbb</p>
                            <p>ccccccccccccccccccc</p>
                            <p>ddddddddddddd</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-style-three sec-pad" style="background-color:#f7f5f1; margin-top:100px; margin-bottom:100px;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">

                        <div class="text mb_40">
                            <p>xxxxxxxxxxxxx</p>
                            <p style="margin-top:15px;">xxxxxxxxxxxxxxxxxxxx</p>
                            <div class="btn-box" style="margin-top:25px;">
                                <a href="#" target="blank" class="theme-btn-one">
                                    xxxxxxxxxxxxxxxxx</a>
                            </div>
                            <p style="margin-top:25px;">
                                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="image-box mr_40">
                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);">
                    </div>
                    <figure class="video" style="width:40%">
                        <video autoplay muted loop style="width: 100%;">
                            <source src="assets/images/videos/somosAETH.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </figure>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection