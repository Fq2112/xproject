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
        <div class="overlay overlay-itf"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">ITFest</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Explore Your Creativity in Technology Era"</em></p>
                        @if(Auth::guest())
                            <a href="{{url('register#form')}}" class="btn btn-common wow fadeInUp"
                               data-wow-duration="1000ms"
                               data-wow-delay="400ms">DAFTAR SEKARANG!</a>
                        @endif
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
        #about .box-item {
            padding-bottom: 0px;
        }
    </style>

    <!-- timeline ITFest Section Start -->
    <div id="testimonial" class="section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="touch-slider owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <img src="/img/IFC/regist.png" alt="ITFest" />
                            <div class="testimonial-text">
                                <h3>Registrasi ITFest</h3>
                                <span>01 September - 31 Oktober 2017</span>
                                <p>Pendaftaran ITFest secara online maupun offline.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/upload.png" alt="ITFest" />
                            <div class="testimonial-text">
                                <h3>Pengumpulan Project ITFest</h3>
                                <span>01 Oktober - 31 Oktober 2017</span>
                                <p>Pengumpulan project ITFest dapat dilakukan secara online dengan
                                    upload project langsung melalui website ini dan YouTube (bila ada video).</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/code.png" alt="ITFest" />
                            <div class="testdaimonial-text">
                                <h3>Babak Penyisihan Online ITFest</h3>
                                <span>01 November - 11 November 2017</span>
                                <p>Babak penyisihan ITFest dilakukan secara online langsung di website ini.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/pengumuman.png" alt="ITFest" />
                            <div class="testimonial-text">
                                <h3>Pengumuman Semifinal ITFest</h3>
                                <span>12 November 2017</span>
                                <p>Pengumuman semifinal ITFest diinformasikan langsung melalui website ini.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IFC/tm.png" alt="ITFest" />
                            <div class="testimonial-text">
                                <h3>Technical Meeting ITFest</h3>
                                <span>17 November 2017</span>
                                <p>Technical Meeting ITFest dilakukan di Gedung B1 Jurusan Teknik Informatika UNESA Ketintang.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/exam.png" alt="ITFest" />
                            <div class="testimonial-text">
                                <h3>Final ITFest</h3>
                                <span>18 November 2017</span>
                                <p>Babak final ITFest dilakukan di Gedung Serba Guna UNESA Ketintang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- timeline ITFest Section Start -->

    <!-- About Section Start -->
    <section id="about" class="section" data-stellar-background-ratio="0.2" style="background: #ffffff;padding-top: 40px;">
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
                                <p style="font-size: 23px; line-height: 200%"><b>ITFest</b> merupakan lomba yang
                                    diadakan untuk menggali kemampuan dan kreatifitas Mahasiswa/i seluruh Indonesia
                                    untuk bisa menciptakan suatu karya yang berupa project yang terbagi atas beberapa
                                    kategori perlombaan yaitu : Animasi, Pengembangan Game, Pengembangan Bisnis, Desain
                                    web dan Kompetisi Game dalam bentuk permainan PES.
                                </p>
                            </div>
                        </div>
                        @if(Auth::guest())
                            <div class="box-item right">
                                <div class="text">
                                    <p>
                                        <a href="{{url('register#form')}}" class="btn btn-common3" id="submit">
                                            daftar sekarang
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endif
                        <div class="box-item right">
                            <div class="text">
                                <p>
                                    <a href="{{url('ic/xproject/itfest-rulebook#blog')}}" class="btn btn-common3"
                                       id="submit">
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
                            <hr class="lines wow zoomIn" data-wow-delay="0.3s"><br>
                            <p style="color: black; font-weight: bold">Tap me!<br>
                            <a href="http://line.me/ti/p/~fiqqizanuarprakoso"><img src="/img/LINE_icon01.png" width="40"
                                                                      height="40"></a>
                            <a href="whatsapp://send?text=Hello, Fiqqi!&phone=+6285784542948&abid=+6285784542948"><img
                                        src="/img/Whatsapp-ios-7-icon.png" width="40" height="40"></a></p>
                            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s" style="color: black;font-weight: bold;font-size: 24px">
                                <b>Fiqqi</b>: fiqqizanuarprakoso | 085784542948<br>
                                <b>Rahma</b>: rmsivana | 085216957677
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection