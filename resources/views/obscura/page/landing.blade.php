@extends('obscura.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/obscura/landing.css') }}">
@endsection

@section('content')

<div class="main">
    <div class="section-1">
        <div class="content m-auto d-flex flex-column justify-content-center align-items-center container">
            <div class="d-flex justify-content-center welcome-text">
                <img class="m-auto" src="{{ asset('images/home/HOME_Welcome.png') }}" alt="" width="50%">
            </div>
            <div class="text-content">
                <h2>TO OBSCURA</h2>
            </div>
            <div class="line-asset d-flex justify-content-center">
                <img src="{{ asset('images/home/HOME_Line.png') }}" alt="" width="70%">
            </div>
        </div>

        <div class="bottom-asset">
            <img src="{{ asset('images/home/HOME_bottom.png') }}" alt="">
        </div>        
    </div>

    <div class="section-2">

    </div>
</div>

@include('obscura.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection