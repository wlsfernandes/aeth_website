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

  <!-- cause-section -->
  <section class="cause-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred mb_50">
                    <h2>@lang('messages.program_resources')</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                        <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="assets/images/gallery/certification.jpg" alt=""></a></figure>
                                    <div class="category"><a href="#">@lang('messages.certification')</a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="text">
                                        <h3><a href="#">xxxxxxxxxx <br />xxxxxxx</a></h3>
                                        <p>xxxxxxxxxxxxxxxxxxxxxxxxxxx.</p>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="85%"><div class="count-text">85%</div></div>
                                        </div>
                                        <div class="donate-text">
                                            <h6><span>$5,020</span> Raised</h6>
                                            <h6><span>$8,000</span> Target</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                        <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="assets/images/gallery/meet1.jpg" style="width:470px;height:270px;"></a></figure>
                                    <div class="category"><a href="#">@lang('messages.resource_center')</a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="text">
                                        <h3><a href="#">dddd <br />ddddddd</a></h3>
                                        <p>ddddddddddddddddddddddd.</p>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="50%"><div class="count-text">50%</div></div>
                                        </div>
                                        <div class="donate-text">
                                            <h6><span>$6,020</span> Raised</h6>
                                            <h6><span>$12,000,000</span> Target</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                        <div class="cause-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="assets/images/gallery/compelling.jpg" style="width:470px;height:270px;"></a></figure>
                                    <div class="category"><a href="#">@lang('messages.preaching')</a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="text">
                                        <h3><a href="#">xxxxxxxxxxxx<br />ddddddd</a></h3>
                                        <p>xxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                                    </div>
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%"><div class="count-text">90%</div></div>
                                        </div>
                                        <div class="donate-text">
                                            <h6><span>$9,080</span> Raised</h6>
                                            <h6><span>$10,000</span> Target</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cause-section end -->

@endsection