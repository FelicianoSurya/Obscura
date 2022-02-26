@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/landing.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section section-1 d-flex flex-column justify-content-center align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/Pattern.png') }}" alt="frame_kanan_bawah" width="350">
        <div class="topic w-100 d-flex flex-column align-items-center justify-content-center">
            <p>MAHASURA</p>
            <p class="fst-italic">Capture the Light Through Diversity</p>
        </div>
        <div class="button w-100 d-flex align-items-center justify-content-center">
            <button class="font-gradient button-about">More About Obscura Exibition</button>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" width="300">
        <img class="m-5" src="{{ asset('images/ObscuraExibition/Frame/pembatas_atas.png') }}" alt="pembatas_atas" width="650">
        <div class="topic d-flex flex-column align-items-center justify-content-center">
            <p class="font-gradient font-goudy fw-bold">MOST FAVOURITE PHOTOS</p>
            <p class="font-goudy fst-italic">An amazing photo are awaits!</p>
        </div>
        <div class="container d-flex justify-content-around slider mt-5">
            <div class="box-image"></div>
            <div class="box-image"></div>
            <div class="box-image"></div>
        </div>
        <div class="button-see d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri" width="150">
            <button class="font-gradient button-about">See More</button>
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan" width="150">
        </div>
    </div>
    <div class="section-3 section-bawah section-3_4 section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <div class="topic d-flex flex-column align-items-center justify-content-center">
            <p class="font-gradient font-goudy fw-bold">OBSCURA COMPETITION</p>
        </div>
        <div class="container d-flex justify-content-around mt-5">
            <div class="box-date d-flex justify-content-center align-items-center">
                <p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p>
            </div>
        </div>
        <p class="mt-5 font-yellow fs-1">Join Our Competition Now!</p>
        <p class="fst-italic skkm fs-5">And get your SKKM and Certificate</p>
        <div class="button-see d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri" width="150">
            <button class="font-gradient button-about">Register Now</button>
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan" width="150">
        </div>
    </div>
    <div class="section-4 section-bawah section-3_4 section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" width="300">
        <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <div class="topic d-flex flex-column align-items-center justify-content-center">
            <p class="font-gradient font-goudy fw-bold">AWARDING NIGHT</p>
        </div>
        <div class="container d-flex justify-content-around mt-3">
            <div class="box-date d-flex justify-content-center align-items-center">
                <p class="font-goudy fw-bold">Coming Soon<br>April 1st 2022</p>
            </div>
        </div>
        <p class="mt-5 font-yellow fs-1">Coming Soon for April 1st 2022</p>
        <p class="fst-italic skkm fs-5">Video will available in Youtube</p>
        <div class="button-see d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri" width="150">
            <button class="font-gradient button-about">Watch on Youtube</button>
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan" width="150">
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