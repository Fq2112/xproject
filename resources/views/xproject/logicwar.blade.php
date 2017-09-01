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
        <div class="overlay overlay-lw"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Logic War</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Explore Your
                                Knowledge with Logic Art"</em></p>
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
            border: 2px solid #FA7F01;
            background-color: #FA7F01;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-common3:hover {
            color: #FA7F01;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #FA7F01;
            transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }
    </style>

    <!-- timeline logic war Section Start -->
    <div id="testimonial" class="section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="touch-slider owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <img src="/img/IFC/regist.png" alt="Logic War"/>
                            <div class="testimonial-text">
                                <h3>Registrasi Logic War</h3>
                                <span>01 September - 19 Oktober 2017</span>
                                <p>Pendaftaran Logic War secara online maupun offline.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/code.png" alt="Logic War"/>
                            <div class="testimonial-text">
                                <h3>Babak Penyisihan Online Logic War</h3>
                                <span>22 Oktober 2017</span>
                                <p>Babak penyisihan Logic War dilakukan secara online langsung di website ini.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/pengumuman.png" alt="Logic War"/>
                            <div class="testimonial-text">
                                <h3>Pengumuman Semifinal Logic War</h3>
                                <span>31 Oktober 2017</span>
                                <p>Pengumuman Semifinal Logic War diinformasikan melalui website ini.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/exam.png" alt="Logic War"/>
                            <div class="testimonial-text">
                                <h3>Semifinal & Final Logic War</h3>
                                <span>05 November 2017</span>
                                <p>Babak semifinal dan final Logic War dilakukan di Gedung E1 lt.3 Fakultas Teknik UNESA
                                    Ketintang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- timeline logic war Section Start -->

    <!-- About Section Start -->
    <section id="about" class="section" data-stellar-background-ratio="0.2"
             style="background: #ffffff; padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="show-box wow fadeInDown animated" data-wow-offset="10">
                        <img src="/img/maskot%20ic%20&%20logic.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-right text-left wow fadeInRight animated" data-wow-offset="10">
                        <div class="box-item right">
                            <div class="text">
                                <p style="font-size: 24px; line-height: 200%"><b>Logic War</b> merupakan lomba yang
                                    diadakan untuk menggali kemampuan logika di kalangan siswa SMA/SMK sederajat. Jenis
                                    lomba ini berbentuk kompetisi logika matematika. Lomba ini memberikan peluang untuk
                                    dapat bersaing sampai sejauh mana mereka mengetahui tentang bidang komputer
                                    khususnya dalam Logika Matematika.
                                </p>
                            </div>
                        </div>
                        <style>
                            #about .box-item {
                                padding-bottom: 0px;
                            }
                        </style>
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
                                    <a id="submit" class="btn btn-common3" href="http://bit.ly/2wLZL45" target="_blank">
                                        DOWNLOAD RULEBOOK
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
                                <a href="http://line.me/ti/p/~nlkin"><img src="/img/LINE_icon01.png" width="40"
                                                                          height="40"></a>
                                <a href="whatsapp://send?text=Hello, Kinanti!&phone=+6289677206608&abid=+6289677206608"><img
                                            src="/img/Whatsapp-ios-7-icon.png" width="40" height="40"></a></p>
                            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"
                               style="color: black;font-weight: bold;font-size: 24px">
                                <b>Kinanti</b>: nlkin | 089677206608<br>
                                <b>Kikin</b>: chairus_sakinah | 085231326541
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection