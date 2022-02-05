@extends('obscura.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/obscura/landing.css') }}">
@endsection

@section('content')

<div class="main">
    <div class="section-1 d-flex justify-content-center align-items-center">
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
            <div class="button-asset d-flex justify-content-center mt-5">
                <img src="{{ asset('images/home/HOME_Button_Explore Us.png') }}" width="70%" alt="">
            </div>
        </div>

        <div class="bottom-asset">
            <img src="{{ asset('images/home/HOME_bottom.png') }}" alt="">
        </div>        
    </div>

    <div class="section-2 d-flex flex-column justify-content-center align-items-center">
        <div class="content d-flex align-items-center container">
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center">
                <span><img src="{{ asset('images/home/BUTTON SEGITIGA.png') }}" alt=""></span>
                <span></span>
                <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_Cover Pameran.png') }}" width="70%" alt="">
                <span class="reverse"><img src="{{ asset('images/home/BUTTON SEGITIGA.png') }}" alt=""></span>
            </div>
            <div class="col-lg-7 d-flex flex-column align-items-center">
                <div class="d-flex justify-content-between align-items-end">
                    <img src="{{ asset('images/home/exibition/OBS EXHI_TEKS_Obscura Exhibition.png') }}" width="70%" alt="">
                    <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_2022.png') }}" class="image-year" alt="">
                </div>
                <div class="d-flex justify-content-start  align-items-center mt-4">
                    <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_Garis Merah Hijau.png') }}" class="pe-4" width="44%" alt="">
                    <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_Trapesium.png') }}" width="44%" alt="">
                </div>
                <div class="weekly-desc pt-3">
                    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro fugit unde nobis, error voluptas architecto? Exercitationem temporibus provident, quibusdam deserunt deleniti, qui vero maxime facere dolorem itaque possimus amet velit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptate accusantium nobis error nulla ad ea dolorum adipisci sed, dignissimos facilis voluptates veniam ullam pariatur, nemo ducimus eum, dolor eos.</p>
                </div>
            </div>
        </div>
        <div class="button-asset d-flex mt-5 align-items-center justify-content-end">
            <img src="{{ asset('images/home/exibition/OBS EXHI_BUTTON_Visit Us.png') }}" width="20%" alt="">
        </div>
    </div>
</div>

@include('obscura.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection