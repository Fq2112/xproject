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
        <div class="overlay overlay-ic"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Informatics
                            Champions</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Explore Your
                                Creativity in Technology Era"</em></p>
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
        .btn-common2 {
            color: #ffffff;
            border: 2px solid #000000;
            background-color: #000000;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-common2:hover {
            color: #000000;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #000000;
            transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }
    </style>
    <!-- Blog Section -->
    <section id="blog" class="section">
        <!-- Container Starts -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item-img">
                            <a href="{{url('ic/xproject/logicwar')}}">
                                <img src="/img/bg/logicwar_nb.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="{{url('ic/xproject/logicwar')}}">Logic War</a>
                            </h3>
                            <p>Logic War merupakan lomba yang diadakan untuk menggali kemampuan logika di kalangan siswa
                                SMA/SMK sederajat. Jenis lomba ini berbentuk kompetisi logika matematika. Lomba ini
                                memberikan peluang untuk dapat bersaing sampai sejauh mana mereka mengetahui tentang
                                bidang komputer khususnya dalam Logika Matematika.</p>
                            <a href="{{url('ic/xproject/logicwar')}}" class="btn btn-common2 btn-rm">MORE INFO</a>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item-img">
                            <a href="{{url('ic/xproject/itfest')}}">
                                <img src="/img/bg/itfest_nb.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="{{url('ic/xproject/itfest')}}">ITFest</a>
                            </h3>
                            <p>
                                ITFest merupakan lomba yang diadakan untuk menggali kemampuan dan kreatifitas
                                Mahasiswa/i seluruh Indonesia untuk bisa menciptakan suatu karya yang berupa project
                                yang terbagi atas beberapa kategori perlombaan yaitu : Animasi, Pengembangan Game,
                                Pengembangan Bisnis, Desain web dan Kompetisi Game dalam bentuk permainan PES.
                            </p>
                            <a href="{{url('ic/xproject/itfest')}}" class="btn btn-common2 btn-rm">MORE INFO</a>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

            </div>
        </div>
    </section>
    <!-- blog Section End -->

@endsection