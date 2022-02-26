@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/gallery.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section section-1 d-flex justify-content-center align-items-center"> 
        <p class="font-gradient font-goudy fw-bold">Hall of Fame</p>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame1.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame3.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame4.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame2.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <img class="pembatas" src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <div class="container w-100 topic d-flex flex-column align-items-center justify-content-center mt-4">
            <form action="" class="w-100">
                <input type="text" placeholder="Search" class="form-control">
            </form>
            <div class="row w-100 m-3 divisi d-flex justify-content-between align-items-center">
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy">Most Like</button>
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy">Most View</button>
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy">Most Shuffle</button>
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy">Most Newest</button>
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy last">Most Oldest</button>
            </div>
        </div>
        <div class="gallery container p-3 m-5">
            <div class="row">
                <div class="col-lg-4 box">
                    <div class="isi-box"></div>
                </div>
                <div class="col-lg-4 box">
                    <div class="isi-box"></div>
                </div>
                <div class="col-lg-4 box">
                    <div class="isi-box"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 box">
                    <div class="isi-box"></div>
                </div>
                <div class="col-lg-3 box">
                    <div class="isi-box"></div>
                </div>
                <div class="col-lg-3 box">
                    <div class="isi-box"></div>
                </div>
                <div class="col-lg-3 box">
                    <div class="isi-box"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 box">
                    <div class="isi-box"></div>
                </div>
                <div class="col-lg-4 box">
                    <div class="isi-box"></div>
                </div>
                <div class="col-lg-4 box">
                    <div class="isi-box"></div>
                </div>
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