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
        <div class="overlay overlay-ci"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Ceremony of
                            Informatics</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Art and
                                Refresh"</em></p>
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
                            <a href="{{url('ci/xproject/wdc')}}">
                                <img src="/img/bg/wdc_nb.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="{{url('ci/xproject/wdc')}}">WDC (Wallpaper Design Competition)</a>
                            </h3>
                            <p>WDC merupakan sebuah lomba karya cipta dalam bentuk visualisasi 2D yang mengandung unsur
                                kreativitas, inovasi dan pemanfaatan yang dikembangkan untuk kepentingan yang luas (baik
                                secara sosial, ekonomi, maupun budaya) dan peserta diharap mengembangkan
                                kekreativitasannya.</p>
                            <a href="{{url('ci/xproject/wdc')}}" class="btn btn-common2 btn-rm">MORE INFO</a>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item-img">
                            <a href="{{url('ci/xproject/ipc')}}">
                                <img src="/img/bg/ipc_nb.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="{{url('ci/xproject/ipc')}}">IPC (Informatics Photography Competition)</a>
                            </h3>
                            <p>
                                IPC merupakan sebuah kompetisi bidang fotografi yang dapat diikuti oleh seluruh
                                masyarakat umum. Pengambilan gambar dapat dilakukan dengan kamera apapun. Informatics
                                Photography Competition ini mengandalkan kreasi dan ketepatan momen peserta saat
                                mengambil gambar.
                            </p>
                            <a href="{{url('ci/xproject/ipc')}}" class="btn btn-common2 btn-rm">MORE INFO</a>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

            </div>
        </div>
    </section>
    <!-- blog Section End -->

@endsection