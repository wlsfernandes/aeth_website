@extends('layouts.app')

@section('title', '#somosAETH | Members') 

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
<section class="about-section" style="margin-top:50px;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="text mb_35">
                            <!-- Image floated to the right with margin -->
                            <figure class="image image-1" style="float: right; margin: 100px 50px 20px 0;">
                                <img src="assets/images/gallery/aeth-member3.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <h1><i class="bi bi-building"></i> @lang('members.inst_membership')</h1>
                            <div class="row" style="margin-top:50px;">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one clearfix">
                                        <li>@lang('members.benefit1')</li>
                                        <li>@lang('members.benefit2')</li>
                                        <li>@lang('members.benefit3')</li>
                                        <li>@lang('members.benefit4')</li>
                                        <li>@lang('members.benefit5')</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one clearfix">
                                        <li>@lang('members.benefit6')</li>
                                        <li>@lang('members.benefit7')</li>
                                        <li>@lang('members.benefit8')</li>
                                        <li>@lang('members.benefit9')</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin:50px;">
                                <div style="margin:50px; display: flex; gap: 10px;">
                                    <form action="{{ route('membershipRedirectPayment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="20">
                                        <button type="submit" class="donate-box-btn theme-btn-one"
                                            style="padding:12px 1px 12px 12px;">
                                            <span>@lang('members.20')</span>
                                        </button>
                                    </form>
                                    <form action="{{ route('membershipRedirectPayment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="200">
                                        <button type="submit" class="donate-box-btn theme-btn-one"
                                            style="padding:12px 1px 12px 12px;">
                                            <span>@lang('members.200')</span>
                                        </button>
                                    </form>
                                </div>
                            </div>

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
                            <figure class="image image-1" style="float: right; margin: 0 20px 20px 0;">
                                <img src="assets/images/gallery/aeth-member6.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <h1><i class="bi bi-person-arms-up"></i> @lang('members.ind_membership')</h1>
                            <div class="row" style="margin-top:50px;">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one clearfix">
                                        <li>@lang('members.benefit11')</li>
                                        <li>@lang('members.benefit12')</li>
                                        <li>@lang('members.benefit13')</li>
                                        <li>@lang('members.benefit14')</li>
                                        <li>@lang('members.benefit15')</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one clearfix">
                                        <li>@lang('members.benefit16')</li>
                                        <li>@lang('members.benefit17')</li>
                                        <li>@lang('members.benefit18')</li>
                                        <li>@lang('members.benefit19')</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin:50px;">
                                <div style="margin:50px; display: flex; gap: 10px;">
                                    <form action="{{ route('membershipRedirectPayment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="10">
                                        <button type="submit" class="donate-box-btn theme-btn-one"
                                            style="padding:12px 1px 12px 12px;">
                                            <span>@lang('members.10')</span>
                                        </button>
                                    </form>
                                    <form action="{{ route('membershipRedirectPayment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="100">
                                        <button type="submit" class="donate-box-btn theme-btn-one"
                                            style="padding:12px 1px 12px 12px;">
                                            <span>@lang('members.100')</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
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
                            <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                <img src="assets/images/gallery/aeth-member4.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <h1><i class="bi bi-mortarboard"></i> @lang('members.student_membership')</h1>
                            <div class="row" style="margin-top:50px;">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one clearfix">
                                        <li>@lang('members.benefit11')</li>
                                        <li>@lang('members.benefit12')</li>
                                        <li>@lang('members.benefit13')</li>
                                        <li>@lang('members.benefit14')</li>
                                        <li>@lang('members.benefit15')</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one clearfix">
                                        <li>@lang('members.benefit16')</li>
                                        <li>@lang('members.benefit17')</li>
                                        <li>@lang('members.benefit18')</li>
                                        <li>@lang('members.benefit19')</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin:50px;">
                                <div style="margin:50px; display: flex; gap: 10px;">
                                    <form action="{{ route('membershipRedirectPayment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="5">
                                        <button type="submit" class="donate-box-btn theme-btn-one"
                                            style="padding:12px 1px 12px 12px;">
                                            <span>@lang('members.5')</span>
                                        </button>
                                    </form>
                                    <form action="{{ route('membershipRedirectPayment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="50">
                                        <button type="submit" class="donate-box-btn theme-btn-one"
                                            style="padding:12px 1px 12px 12px;">
                                            <span>@lang('members.50')</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection