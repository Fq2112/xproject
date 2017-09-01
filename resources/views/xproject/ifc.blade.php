@extends('layouts.xproject.master')
@section('content')
    <!-- Header Section Start -->
    <header id="video-area" data-stellar-background-ratio="0.5">
        <div id="block" data-vide-bg="video/video"></div>
        <div class="fixed-top">
            <div class="container">
                <div class="logo-menu">
                    <a href="/xproject" class="logo"><img src="/img/xproject2.PNG" width="15%"></a>
                    <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
                </div>
            </div>
        </div>
        <div class="overlay overlay-ifc"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Informatics Futsal
                            Championship</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Play with
                                Your Heart and Feel Glory"</em></p>
                        <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms"
                           data-wow-delay="400ms">DAFTAR SEKARANG!</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <style>
        .btn-common3 {
            color: #ffffff;
            border: 2px solid #018580;
            background-color: #018580;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-common3:hover {
            color: #018580;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #018580;
            transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }
        #about .box-item {
            padding-bottom: 0px;
        }
    </style>

    <!-- timeline ifc Section Start -->
    <div id="testimonial" class="section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="touch-slider owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <img src="/img/IFC/regist.png" alt="IFC" />
                            <div class="testimonial-text">
                                <h3>Registrasi IFC</h3>
                                <span>15 September - 15 Oktober 2017</span>
                                <p>Pendaftaran IFC secara online maupun offline.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IFC/tm.png" alt="IFC" />
                            <div class="testimonial-text">
                                <h3>Technical Meeting IFC</h3>
                                <span>26 Oktober 2017</span>
                                <p>Technical Meeting IFC dilakukan di Gedung B1 Jurusan Teknik Informatika UNESA Ketintang.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IFC/final.png" alt="IFC" />
                            <div class="testimonial-text">
                                <h3>Babak Penyisihan dan Final IFC</h3>
                                <span>28 Oktober - 29 Oktober 2017</span>
                                <p>Babak penyisihan dan final IFC dilakukan di Lapangan GOR Internasional UNESA Lidah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- timeline ifc Section Start -->

    <!-- About Section Start -->
    <section id="about" class="section" data-stellar-background-ratio="0.2" style="background: #ffffff;padding-top: 40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="show-box wow fadeInDown animated" data-wow-offset="10">
                        <img src="/img/maskot%20ifc.png" style="width: 85%">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-right text-left wow fadeInRight animated" data-wow-offset="10">
                        <div class="box-item right">
                            <div class="text">
                                <p style="font-size: 28px; line-height: 200%"><b>IFC</b> merupakan kompetisi futsal guna
                                    untuk mengembangkan bakat dan minat di bidang futsal dari siswa SMA/SMK sederajat.
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="box-item right">
                            <div class="text">
                                <p>
                                    <a href="#" class="btn btn-common3" id="submit">
                                        daftar sekarang
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="box-item right">
                            <div class="text">
                                <p>
                                    <a href="http://bit.ly/2em2tCr" target="_blank" class="btn btn-common3" id="submit">
                                        download rulebook
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <section id="contact" class="section" style="padding: 36px 5px 0px 11px;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <div class="contact-block" style="background: #F2F2F2">
                        <div class="section-header">
                            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                                <span>Contact Person</span></h2>
                            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                            <p style="color: black; font-weight: bold">Tap me!<br>
                                <a href="http://line.me/ti/p/~fitrotindwi"><img src="/img/LINE_icon01.png" width="40"
                                                                          height="40"></a>
                                <a href="whatsapp://send?text=Hello, Fitro!&phone=+6289675014272&abid=+6289675014272"><img
                                            src="/img/Whatsapp-ios-7-icon.png" width="40" height="40"></a></p>
                            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s" style="color: black;font-weight: bold;font-size: 24px">
                                <b>Fitrotin</b>: fitrotindwi | 089675014272<br>
                                <b>Adib</b>: Hafiizh04 | 087757232330
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection