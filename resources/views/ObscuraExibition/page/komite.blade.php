@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/komite.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section section-1 d-flex justify-content-center align-items-center"> 
        <p class="font-gradient font-goudy fw-bold">Meet The Committee</p>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU KLUET</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Badan Pengurus Harian</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom kom container d-flex justify-content-around align-items-center 0 m-lg-5 m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU AERO</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Visual</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU BAJO</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Media Partner</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU MOROTAI</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Registrasi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU SIKKA</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Acara</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU BANJAR</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Fresh money</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU LUWU</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Perlengkapan</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU SAMIN</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Keamanan</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU ASARO</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Dokumentasi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU ALUNE</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Publikasi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="akhir section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <img class="pembatas" src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU LINTANG</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Supervisi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom container d-flex justify-content-around align-items-center m-0 m-lg-5 image-bawah">
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"></div>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
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