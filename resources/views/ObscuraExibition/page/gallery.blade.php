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
                <div class="image-column">
                    <img loading="lazy" data-bs-toggle="modal" data-bs-target="#exampleModal" src="https://images.unsplash.com/photo-1646122296818-cfddda505b1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                    <img loading="lazy" data-bs-toggle="modal" data-bs-target="#exampleModal1" src="https://images.unsplash.com/photo-1646100960029-967036496807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=856&q=80" alt="">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1646115578275-d674f7e45500?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1646100960029-967036496807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=856&q=80" alt="">
                </div>
                <div class="image-column">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1646100960029-967036496807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=856&q=80" alt="">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1646115578275-d674f7e45500?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1646115578275-d674f7e45500?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                </div>
                <div class="image-column">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1638913658179-18c9a9c943f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">   
                    <img loading="lazy" src="https://images.unsplash.com/photo-1646115578275-d674f7e45500?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                </div>
                <!-- @foreach($gallery as $data)
                <div class="col-lg-4 box">
                    <div class="isi-box"><img src="{{ asset('storage/Images/Competition') . '/' . $data['image'] }}" alt=""></div>
                </div>
                @endforeach -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade p-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-5 position-relative">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="img-left">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="img-botleft">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="img-right">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="img-botright">
        <div class="modal-img-container d-flex justify-content-center p-3">
            <img loading="lazy" data-bs-toggle="modal" data-bs-target="#exampleModal" src="https://images.unsplash.com/photo-1646122296818-cfddda505b1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
        </div>
        <div class="title-content row w-100 justify-content-between mb-3">
            <div class="col-6 d-flex flex-column ">
                <div class="photo-title">Photo title</div>
                <div class="photo-name">Photographer name</div>

            </div>
            <div class="col-3 like-button d-flex justify-content-end align-items-center mb-2">
                <img src="{{ asset('images/ObscuraExibition/Button/like-empty.png') }}" alt="" width="100px">
                <h4>20 Like</h4>
            </div>
        </div>
        <div class="modal-text-container mb-3">
            Mahasura is Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
        </div>
        <div class="row button-container justify-content-center my-5">
            <button class="vote-btn">Vote Now</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade p-0" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-5 position-relative">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="img-left">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="img-botleft">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="img-right">
        <img  src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="img-botright">
        <div class="modal-img-container d-flex justify-content-center p-3">
            <img loading="lazy" data-bs-toggle="modal" data-bs-target="#exampleModal" src="https://images.unsplash.com/photo-1646100960029-967036496807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=856&q=80" alt="">
        </div>
        <div class="title-content row w-100 justify-content-between mb-3">
            <div class="col-6 d-flex flex-column ">
                <div class="photo-title">Photo title</div>
                <div class="photo-name">Photographer name</div>

            </div>
            <div class="col-3 like-button d-flex justify-content-end align-items-center mb-2">
                <img src="{{ asset('images/ObscuraExibition/Button/like-empty.png') }}" alt="" width="100px">
                <h4>20 Like</h4>
            </div>
        </div>
        <div class="modal-text-container mb-3">
            Mahasura is Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
        </div>
        <div class="row button-container justify-content-center my-5">
            <button class="vote-btn">Vote Now</button>
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