@extends('layouts.app')

@section('title', 'AETH | Members') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/gallery/membership.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
           
        </div>
    </div>
</section>
<section class="about-section bg-color-1 p_relative sec-pad">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="text mb_35">
                            <!-- Image floated to the left with margin -->
                            <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                <img src="assets/images/gallery/aeth-member3.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <p>@lang('members.p1')</p>
                            <p style="margin-top:20px;">@lang('members.p2')</p>
                            <p style="margin-top:20px;">@lang('members.p3')</p>
                            <p style="margin-top:20px;">@lang('members.p4')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section" style="margin-top:50px;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="text mb_35">
                            <!-- Image floated to the left with margin -->
                            <figure class="image image-1" style="float: right; margin: 0 20px 20px 0;">
                                <img src="assets/images/gallery/aeth-member2.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <p>@lang('members.p1')</p>
                            <p style="margin-top:20px;">@lang('members.p2')</p>
                            <p style="margin-top:20px;">@lang('members.p3')</p>
                            <p style="margin-top:20px;">@lang('members.p4')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section bg-color-1 p_relative sec-pad">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="text mb_35">
                            <!-- Image floated to the left with margin -->
                            <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                <img src="assets/images/gallery/aeth-member4.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <p>@lang('members.p1')</p>
                            <p style="margin-top:20px;">@lang('members.p2')</p>
                            <p style="margin-top:20px;">@lang('members.p3')</p>
                            <p style="margin-top:20px;">@lang('members.p4')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section" style="margin-top:50px;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="text mb_35">
                            <!-- Image floated to the left with margin -->
                            <figure class="image image-1" style="float: right; margin: 0 20px 20px 0;">
                                <img src="assets/images/gallery/aeth-member5.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <p>@lang('members.p1')</p>
                            <p style="margin-top:20px;">@lang('members.p2')</p>
                            <p style="margin-top:20px;">@lang('members.p3')</p>
                            <p style="margin-top:20px;">@lang('members.p4')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection