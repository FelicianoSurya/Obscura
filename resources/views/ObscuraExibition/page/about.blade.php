@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/about.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section section-1 d-flex justify-content-center align-items-center">
        <div class="container content-section-1"> 
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" width="20%">
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" width="20%">
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" width="20%">
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" width="20%">
            <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_atas.png') }}" alt="frame_kanan_bawah" width="40%">
            <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_atas.png') }}" alt="pembatas-bawah" width="40%">
            <div class="topic row d-flex w-100 p-lg-5">
                <div class="judul col-lg-7 col-12 p-0">
                    <p>OBSCURA</p>
                    <p>EXHIBITION:</p>
                </div>
                <div class="col-lg-5 col-12 d-flex justify-content-center">
                    <img src="{{ asset('images/ObscuraExibition/Logo/logo.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <img class="pembatas_atas" src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <div class="topic d-flex flex-column align-items-center justify-content-center">
            <p class="font-gradient font-goudy fw-bold mt-5">MEET THE COMMITTEE</p>
        </div>
        <div class="container d-flex justify-content-around slider mt-5">
            <div class="box-image"></div>
            <div class="box-image"></div>
            <div class="box-image"></div>
            <div class="box-image"></div>
            <div class="box-image"></div>
        </div>
        <div class="button-see d-flex justify-content-between align-items-center">
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri" width="150">
            <a href="{{ route('komiteExhibition') }}"><button class="font-yellow button-about">See More</button></a>
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan" width="150">
        </div>
    </div>

    <div class="section-3 section-3_4 section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_atas.png') }}" alt="frame_kanan_bawah">
        <div class="topic d-flex flex-column align-items-center justify-content-center">
            <p class="font-gradient font-goudy fw-bold">OUR EVENTS</p>
        </div>
        <div class="container d-flex justify-content-around mt-5">
            <div class="box-date d-flex justify-content-center align-items-center">
                <p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p>
            </div>
        </div>
    </div>

    
</div>

@include('ObscuraExibition.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            
            
        });
    </script>
@endsection