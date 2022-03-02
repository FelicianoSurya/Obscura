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
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy">Shuffle</button>
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy">Newest</button>
                <button class="col-lg-2 col-md-2 col-12 font-yellow font-goudy last">Oldest</button>
            </div>
        </div>
        <div class="">
            <div class=" image-position-container container">
                <!-- <div class="image-column">
                    @foreach($gallery as $data)
                    <input type="hidden" id="id-gallery" value="{{ $data['id'] }}">
                    @auth
                    <input type="hidden" id="id-user" value="{{ Auth::user()->id }}">
                    @endauth
                    <img loading="lazy" class="modal-image" data-bs-toggle="modal" data-bs-target="#modal-{{ $data['id'] }}" src="{{ asset('storage/Images/Competition') . '/' . $data['image'] }}" alt="">
                    @endforeach
                </div> -->
                @foreach($gallery as $data)
                <div class="col-lg-4 box">
                    <input type="hidden" id="id-gallery" value="{{ $data['id'] }}">
                    @auth
                    <input type="hidden" id="id-user" value="{{ Auth::user()->id }}">
                    @endauth     
                    <img loading="lazy" class="modal-image" data-bs-toggle="modal" data-bs-target="#modal-{{ $data['id'] }}" src="{{ asset('storage/Images/Competition') . '/' . $data['image'] }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach($gallery as $data)
<div class="modal fade p-0" id="modal-{{ $data['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-5 position-relative">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="img-left">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="img-botleft">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="img-right">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="img-botright">
        <div class="modal-img-container d-flex justify-content-center p-3">
            <img loading="lazy" data-bs-toggle="modal" data-bs-target="#exampleModal" src="{{ asset('storage/Images/competition') . '/' . $data['image'] }}" alt="">
        </div>
        <div class="title-content row w-100 justify-content-between mb-3">
            <div class="col-6 d-flex flex-column ">
                <div class="photo-title">{{ $data['title'] }}</div>
                <div class="photo-name">{{ $data['name'] }}</div>

            </div>
            <div class="col-3 like-button d-flex justify-content-end align-items-center mb-2">
                <input type="hidden" id="gallery-id" value="{{ $data['id'] }}">
                @auth
                <input type="hidden" id="user-id" value="{{ Auth::user()->id }}">
                <img class="like_full" src="{{ asset('images/ObscuraExibition/Button/like_full.png') }}" alt="" width="100px">
                @endauth
                <img class="like_empty" src="{{ asset('images/ObscuraExibition/Button/like-empty.png') }}" alt="" width="100px">
                <h4 class="like"></h4><h4 class="ps-1">Like</h4>
            </div>
        </div>
        <div class="modal-text-container mb-3">
            {{ $data['description'] }} 
        </div>
        <div class="row button-container justify-content-center my-5">
            <button class="vote-btn">Vote Now</button>
        </div>
    </div>
  </div>
</div>
@endforeach

@include('ObscuraExibition.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        $(document).ready(function(){
            $(".modal-image").click(function(e){
                let galleryID = $(this).closest(".box").children("#id-gallery").val();
                let _token   = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url : '/getLike',
                    method : 'POST',
                    data : {
                        galleryID : galleryID,
                        _token : _token
                    },
                    success : function(result){
                        $(".like").html(result.like);
                    }
                })
            });
            $(".modal-image").click(function(e){
                let galleryID = $(this).closest(".box").children("#id-gallery").val();
                let _token   = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url : '/getViews',
                    method : 'POST',
                    data : {
                        galleryID : galleryID,
                        _token : _token
                    },
                });
            });
            $(".modal-image").click(function(e){
                let userID = $(this).closest(".box").children("#id-user").val();
                let galleryID = $(this).closest(".box").children("#id-gallery").val();
                let _token   = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url : '/knowLike',
                    method : 'POST',
                    data : {
                        userID : userID,
                        galleryID : galleryID,
                        _token : _token
                    },
                    success : function(result){
                        if(result.data > 0){
                            $(".like_empty").hide();
                            $('.like_full').show();
                        }else{
                            $(".like_full").hide();
                            $(".like_empty").show();
                        }
                    },
                });
            });
            $(".like_empty").click(function(e){
                let userID = $(this).closest(".like-button").children("#user-id").val();
                let galleryID = $(this).closest(".like-button").children("#gallery-id").val();
                let _token   = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url : '/addLike',
                    method : 'POST',
                    data : {
                        userID : userID,
                        galleryID : galleryID,
                        _token : _token
                    },
                    success : function(result){
                        $(".like").html(result.like);
                        $(".like_empty").hide();
                        $('.like_full').show();
                    },
                    error: function () {
                        alert('silahkan login terlebih dahulu');
                    }
                });
            });
            $(".like_full").click(function(e){
                let userID = $(this).closest(".like-button").children("#user-id").val();
                let galleryID = $(this).closest(".like-button").children("#gallery-id").val();
                let _token   = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url : '/deleteLike',
                    method : 'POST',
                    data : {
                        userID : userID,
                        galleryID : galleryID,
                        _token : _token
                    },
                    success : function(result){
                        $(".like").html(result.like);
                        $(".like_full").hide();
                        $(".like_empty").show();
                    },
                });
                setTimeout(function() {},1000);
            });
        });
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            
            
        });
    </script>
@endsection