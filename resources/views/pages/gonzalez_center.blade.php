@extends('layouts.app')

@section('title', 'AETH | Home') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/gallery/center-background.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Centro de Recursos Justo & Catherine González</h1>
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
                                <img src="assets/images/gallery/meet1.jpg" alt=""
                                    style="max-width: 500px; height: auto;">
                            </figure>
                            <p>@lang('gonzalez.p1')</p>
                            <p style="margin-top:20px;">@lang('gonzalez.p2')</p>
                            <p style="margin-top:20px;">@lang('gonzalez.p3')</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="donate-content">
            <div class="title-text centred" style="margin:50px;">
                <h2 style="margin:50px;color:#330033"><i>Donate</i></h2>
            </div>
            <form action="{{ route('payment.redirect') }}" method="POST" class="default-form">
                @csrf
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 donate-column">
                        <div class="donate-box">
                            <div class="donate-option">
                                <h3>How Much?</h3>
                                <ul class="donate-list clearfix">
                                    <li>
                                        <input type="radio" id="donate-amount-1" name="donate-amount" value="1500"
                                            checked />
                                        <label for="donate-amount-1">$15</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-2" name="donate-amount" value="2000" />
                                        <label for="donate-amount-2">$20</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-3" name="donate-amount" value="3000" />
                                        <label for="donate-amount-3">$50</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-4" name="donate-amount" value="4000" />
                                        <label for="donate-amount-4">$100</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-5" name="donate-amount" value="5000" />
                                        <label for="donate-amount-5">$500</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="donate-amount-6" name="donate-amount" value="10000" />
                                        <label for="donate-amount-6">$1000</label>
                                    </li>
                                </ul>
                                <div class="other-amount">
                                    <div class="text">
                                        <h4>Like to Donate</h4>
                                        <p>Enter your custom amount</p>
                                    </div>
                                    <div class="amount-box">
                                        <div class="item-quantity">
                                            <input class="quantity-spinner" type="text" name="custom-amount" value="0">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-text centred">
                    <button type="submit" class="theme-btn-one" style="margin:50px;">Donate Now</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection