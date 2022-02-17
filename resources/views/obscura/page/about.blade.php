@extends('obscura.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/obscura/about.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section-1 m-auto text-center d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('images/about/title.png') }}" class="title d-block" alt="">
        <p class="container d-block">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
        <img src="{{ asset('images/about/arrow.png') }}" class="arrow"alt="">
    </div>

    <div class="section-2 row">
        <div class="col-5 visimisi ">
            <img  class="w-100 h-100" src="{{ asset('images/about/visimisi.png') }}" alt="">
        </div>
        <div class="col-1 border-gradient d-flex flex-column p-0">
            <div class="text-container d-flex w-100 h-50 justify-content-center align-items-center" id="visi">
                <div class="visi" id="visi-text">
                    VISION
                </div>
            </div>
            <div class="text-container d-flex w-100 h-50 justify-content-center align-items-center" id="misi">
                <div class="mission " id="misi-text">
                    MISSION
                </div>
            </div>
            
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <div class="d-none flex-column container" id="content-misi">
                <img src="{{ asset('images/about/misi.png') }}" width="50%" alt="">
                <div class="content-list ">
                    <ul>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                    </ul>
                </div>
            </div>
            <div class="d-none flex-column container" id="content-visi">
                <img src="{{ asset('images/about/visi.png') }}" width="50%" alt="">
                <div class="content-list ">
                    <ul>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3 container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>

        </div>
    </div>
</div>

@include('obscura.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $( "#visi" ).addClass("active");
            $( "#visi-text" ).addClass("active");
            $( "#content-visi" ).addClass("d-flex");
            $( "#content-visi" ).removeClass("d-none");
        });
        $("#visi").click(function() {
            $( "#visi" ).addClass("active");
            $( "#visi-text" ).addClass("active");
            $( "#misi" ).removeClass("active");
            $( "#misi-text" ).removeClass("active");
            $( "#content-visi" ).addClass("d-flex");
            $( "#content-visi" ).removeClass("d-none");
            $( "#content-misi" ).addClass("d-none");
            $( "#content-misi" ).removeClass("d-flex");
        })
        $("#misi").click(function() {
            $( "#misi" ).addClass("active");
            $( "#misi-text" ).addClass("active");
            $( "#visi" ).removeClass("active");
            $( "#visi-text" ).removeClass("active");
            $( "#content-misi" ).addClass("d-flex");
            $( "#content-misi" ).removeClass("d-none");
            $( "#content-visi" ).addClass("d-none");
            $( "#content-visi" ).removeClass("d-flex");
        })
    </script>
@endsection