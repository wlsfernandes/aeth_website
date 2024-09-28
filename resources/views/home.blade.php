
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
@endsection
