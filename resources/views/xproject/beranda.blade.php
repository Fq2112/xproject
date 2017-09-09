@extends('layouts.xproject.master')
@section('content')
    <!-- Header Section Start -->
    <header id="video-area" data-stellar-background-ratio="0.5">
        <div id="block" data-vide-bg="video/video"></div>
        <div class="fixed-top">
            <div class="container">
                <div class="logo-menu">
                    <a href="/xproject" class="logo"><img id="xpro" src="/img/xproject2.PNG" style="width: 15%"></a>
                    <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
                </div>
            </div>
        </div>
        <div class="overlay overlay-2"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">X-Project 3.0</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Infinite
                                Spirit and Creativity"</em></p>
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


    <!-- Events Section Start -->
    <section id="events" class="section">
        <style>
            #acara a {
                text-decoration: none;
            }

            #ic a {
                color: #FA7F01;
            }

            #ci a {
                color: #240D4F;
            }

            #ifc a {
                color: #018580;
            }
        </style>
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <span>Events</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Serangkaian
                    kegiatan X-Project 3.0 2017</p>
            </div>
            <div id="acara" class="row">
                <div id="ifc" class="col-md-4 col-sm-12 col-xs-12">
                    <div class="item-boxes wow fadeInDown" data-wow-delay="0.6s">
                        <div>
                            <a href="{{url('ifc/xproject')}}"><img src="/img/maskot%20ifc.png" width="200" height="200"></a>
                        </div>
                        <a href="{{url('ifc/xproject')}}"><h4>Informatics Futsal Championship</h4></a>
                        <p align="justify">IFC (Informatics Futsal Championship) merupakan kompetisi futsal guna untuk
                            mengembangkan bakat dan minat di bidang futsal dari siswa SMA/SMK sederajat.</p>
                    </div>
                </div>
                <div id="ic" class="col-md-4 col-sm-12 col-xs-12">
                    <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
                        <div>
                            <a href="{{url('ic/xproject')}}"><img src="/img/maskot%20ic%20&%20logic.png" width="200"
                                                                  height="200"></a>
                        </div>
                        <a href="{{url('ic/xproject')}}"><h4>Informatics Champions</h4></a><br>
                        <p align="justify">IC (Informatics Champions) merupakan perlombaan yang memadukan berbagai sisi
                            dasar kemajuan teknologi baik dalam bentuk project maupun tes logika.</p>
                    </div>
                </div>
                <div id="ci" class="col-md-4 col-sm-12 col-xs-12">
                    <div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
                        <div>
                            <a href="{{url('ci/xproject')}}"><img src="/img/maskotCI.png" width="200"
                                                                  height="200"></a>
                        </div>
                        <a href="{{url('ci/xproject')}}"><h4>Ceremony of Informatics</h4></a><br>
                        <p align="justify">CI (Ceremony of Informatics) merupakan suatu kegiatan dimana mahasiswa baru
                            Teknik Informatika 2017 diresmikan untuk menjadi Keluarga Besar Jurusan Teknik Informatika
                            Unesa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Events Section End -->

    <!-- About Section Start -->
    <section id="about" class="section" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <span>About</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><b>X-Project
                        3.0</b> merupakan kegiatan yang ke-3 dari <b>Himpunan Jurusan Teknik Informatika</b> UNIVERSITAS
                    NEGERI SURABAYA.<br>X-Project terdiri dari 3 acara, yaitu <b>IFC</b> (<b>I</b>nformatics <b>F</b>utsal
                    <b>C</b>hampionship), <b>IC</b> (<b>I</b>nformatics <b>C</b>hampions), dan CI (<b>C</b>eremony of
                    <b>I</b>nformatics).<br>Kegiatan
                    X-Project 3.0 2017 ini bertujuan untuk:
                </p>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="show-box wow fadeInDown animated" data-wow-offset="10">
                        <img src="/img/logoxprocopy.png" width="10%" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="content-right text-left wow fadeInRight animated" data-wow-offset="10">
                        <div class="box-item right">
                            <div class="text">
                                <h4>Menumbuhkembangkan</h4>
                                <p align="justify">Kreativitas para peserta dibidang IT dan seni serta
                                    membudayakan iklim kompetisi di lingkungan mahasiswa Jurusan Teknik Informatika.</p>
                            </div>
                        </div>
                        <div class="box-item right">
                            <div class="text">
                                <h4>Memberikan</h4>
                                <p align="justify">Pengalaman berkompetisi baik bagi kalangan umum maupun kalangan
                                    mahasiswa Jurusan Teknik Informatika.</p>
                            </div>
                        </div>
                        <div class="box-item right">
                            <div class="text">
                                <h4>Meningkatkan</h4>
                                <p align="justify">Keakraban dan Kekompakan mahasiswa baru Jurusan Teknik Informatika
                                    Universitas Negeri Surabaya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <div id="pricing" class="section pricing-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <span>Timeline</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Timeline
                    kegiatan
                    X-Project 3.0 2017</p>
            </div>
            <div class="row pricing-tables">
                <div class="col-md-12">
                    <div class="pricing-table table-left wow fadeInLeft" data-wow-duration="1000ms"
                         data-wow-delay="0.3s">
                        <style>
                            *, *::before, *::after {
                                margin: 0;
                                padding: 0;
                                box-sizing: border-box;
                            }

                            /* TIMELINE
           –––––––––––––––––––––––––––––––––––––––––––––––––– */
                            .timeline {
                                color: #ffffff;
                            }

                            .timeline ul {
                                background: #ffffff;
                                padding: 50px 0;
                            }

                            .timeline ul li {
                                list-style-type: none;
                                position: relative;
                                width: 6px;
                                margin: 0 auto;
                                padding-top: 50px;
                                background: #aeaeae;
                            }

                            .timeline ul li::after {
                                content: '';
                                position: absolute;
                                left: 50%;
                                bottom: 0;
                                transform: translateX(-50%);
                                width: 30px;
                                height: 30px;
                                border-radius: 50%;
                                background: inherit;
                            }

                            .timeline ul li div {
                                position: relative;
                                bottom: 0;
                                width: 400px;
                                padding: 15px;
                                background: #7B9DFB;
                            }

                            .timeline ul li div::before {
                                content: '';
                                position: absolute;
                                bottom: 7px;
                                width: 0;
                                height: 0;
                                border-style: solid;
                            }

                            .timeline ul li:nth-child(odd) div {
                                left: 45px;
                            }

                            .timeline ul li:nth-child(odd) div::before {
                                left: -15px;
                                border-width: 8px 16px 8px 0;
                                border-color: transparent #7B9DFB transparent transparent;
                            }

                            .timeline ul li:nth-child(even) div {
                                left: -439px;
                            }

                            .timeline ul li:nth-child(even) div::before {
                                right: -15px;
                                border-width: 8px 0 8px 16px;
                                border-color: transparent transparent transparent #7B9DFB;
                            }

                            time {
                                display: block;
                                font-size: 1.2rem;
                                font-weight: bold;
                                margin-bottom: 8px;
                            }

                            /* EFFECTS
                            –––––––––––––––––––––––––––––––––––––––––––––––––– */

                            .timeline ul li::after {
                                transition: background .5s ease-in-out;
                            }

                            .timeline ul li.in-view::after {
                                background: #7B9DFB;
                            }

                            .timeline ul li div {
                                visibility: hidden;
                                opacity: 0;
                                transition: all .5s ease-in-out;
                            }

                            .timeline ul li:nth-child(odd) div {
                                transform: translate3d(200px, 0, 0);
                            }

                            .timeline ul li:nth-child(even) div {
                                transform: translate3d(-200px, 0, 0);
                            }

                            .timeline ul li.in-view div {
                                transform: none;
                                visibility: visible;
                                opacity: 1;
                            }

                            /* GENERAL MEDIA QUERIES
                            –––––––––––––––––––––––––––––––––––––––––––––––––– */

                            @media screen and (max-width: 900px) {
                                .timeline ul li div {
                                    width: 250px;
                                }

                                .timeline ul li:nth-child(even) div {
                                    left: -289px;
                                    /*250+45-6*/
                                }
                            }

                            @media screen and (max-width: 600px) {
                                .timeline ul li {
                                    margin-left: 20px;
                                }

                                .timeline ul li div {
                                    width: calc(100vw - 91px);
                                }

                                .timeline ul li:nth-child(even) div {
                                    left: 45px;
                                }

                                .timeline ul li:nth-child(even) div::before {
                                    left: -15px;
                                    border-width: 8px 16px 8px 0;
                                    border-color: transparent #7B9DFB transparent transparent;
                                }
                            }
                        </style>
                        <section class="timeline">
                            <ul>
                                <style>
                                    #bg_ic.in-view::after {
                                        background: #FA7F01;
                                    }

                                    #bg_ic div {
                                        background: #FA7F01;
                                    }

                                    #bg_ic:nth-child(even) div::before {
                                        border-color: transparent transparent transparent #FA7F01;
                                    }

                                    #bg_ic:nth-child(odd) div::before {
                                        border-color: transparent #FA7F01 transparent transparent;
                                    }

                                    #bg_ci.in-view::after {
                                        background: #240D4F;
                                    }

                                    #bg_ci div {
                                        background: #240D4F;
                                    }

                                    #bg_ci:nth-child(even) div::before {
                                        border-color: transparent transparent transparent #240D4F;
                                    }

                                    #bg_ci:nth-child(odd) div::before {
                                        border-color: transparent #240D4F transparent transparent;
                                    }

                                    #bg_ifc.in-view::after {
                                        background: #018580;
                                    }

                                    #bg_ifc div {
                                        background: #018580;
                                    }

                                    #bg_ifc:nth-child(even) div::before {
                                        border-color: transparent transparent transparent #018580;
                                    }

                                    #bg_ifc:nth-child(odd) div::before {
                                        border-color: transparent #018580 transparent transparent;
                                    }
                                </style>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Registrasi Logic War</b>
                                        <p align="left" style="font-size: 16px">01 September - 19 Oktober
                                            2017</p></time></p>
                                        <p align="left">Pendaftaran Logic War secara online maupun offline.
                                        <hr>
                                        <a href="#" class="btn btn-common2" data-toggle="modal" data-target="#myModal1">Panduan
                                            Pendaftaran</a></p>

                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Registrasi ITFest</b>
                                        <p align="left" style="font-size: 16px">01 September - 31 Oktober
                                            2017</p></time></p>
                                        <p align="left">Pendaftaran ITFest secara online maupun offline.</p>
                                    </div>
                                </li>
                                <li id="bg_ci">
                                    <div>
                                        <p align="left">
                                            <time><b>Registrasi dan Pengiriman Karya WDC & IPC</b>
                                        <p align="left" style="font-size: 16px">6 September – 25 Oktober
                                            2017</p></time></p>
                                        <p align="left">Pendaftaran WDC dan IPC dapat dilakukan secara online maupun
                                            offline, sedangkan untuk pengiriman karya WDC dan IPC hanya bisa dilakukan
                                            secara online.</p>
                                    </div>
                                </li>
                                <li id="bg_ifc">
                                    <div>
                                        <p align="left">
                                            <time><b>Registrasi IFC</b>
                                        <p align="left" style="font-size: 16px">15 September - 15 Oktober
                                            2017</p></time></p>
                                        <p align="left">Pendaftaran IFC secara online maupun offline.</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Pengumpulan Project ITFest</b>
                                        <p align="left" style="font-size: 16px">01 Oktober - 31 Oktober
                                            2017</p></time></p>
                                        <p align="left">Pengumpulan project ITFest dapat dilakukan secara online dengan
                                            upload project langsung melalui website ini dan YouTube (bila ada
                                            video).</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Babak Penyisihan Online Logic War</b>
                                        <p align="left" style="font-size: 16px">22 Oktober 2017</p></time></p>
                                        <p align="left">Babak penyisihan Logic War dilakukan secara online langsung di
                                            website ini.</p>
                                    </div>
                                </li>
                                <li id="bg_ifc">
                                    <div>
                                        <p align="left">
                                            <time><b>Technical Meeting IFC</b>
                                        <p align="left" style="font-size: 16px">26 Oktober 2017</p></time></p>
                                        <p align="left">Technical Meeting IFC dilakukan di Gedung B1 Jurusan Teknik
                                            Informatika UNESA Ketintang.</p>
                                    </div>
                                </li>
                                <li id="bg_ifc">
                                    <div>
                                        <p align="left">
                                            <time><b>Babak Penyisihan dan Final IFC</b>
                                        <p align="left" style="font-size: 16px">28 Oktober - 29 Oktober
                                            2017</p></time></p>
                                        <p align="left">Babak penyisihan dan final IFC dilakukan di Lapangan GOR
                                            Internasional UNESA Lidah.</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Pengumuman Semifinal Logic War</b>
                                        <p align="left" style="font-size: 16px">31 Oktober 2017</p></time></p>
                                        <p align="left">Pengumuman Semifinal Logic War diinformasikan melalui website
                                            ini.</p>
                                    </div>
                                </li>
                                <li id="bg_ci">
                                    <div>
                                        <p align="left">
                                            <time><b>Penilaian WDC & IPC (Juri + Jumlah Like Instagram)</b>
                                        <p align="left" style="font-size: 16px">30 Oktober - 09 November
                                            2017</p></time></p>
                                        <p align="left">Penilaian dilakukan oleh juri untuk menentukan juara umum, dan
                                            penilaian dengan like instagram untuk menentukan juara favorit.</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Babak Penyisihan Online ITFest</b>
                                        <p align="left" style="font-size: 16px">01 November - 11 November
                                            2017</p></time></p>
                                        <p align="left">Babak penyisihan ITFest dilakukan secara online langsung di
                                            website ini.</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Semifinal & Final Logic War</b>
                                        <p align="left" style="font-size: 16px">05 November 2017</p></time></p>
                                        <p align="left">Babak semifinal dan final Logic War dilakukan di Gedung E1 lt.3
                                            Fakultas Teknik UNESA Ketintang.</p>
                                    </div>
                                </li>

                                <li id="bg_ci">
                                    <div>
                                        <p align="left">
                                            <time><b>Pengumuman Juara WDC & IPC</b>
                                        <p align="left" style="font-size: 16px">10 November 2017</p></time></p>
                                        <p align="left">Pengumuman juara diinformasikan melalui website ini. Namun,
                                            pengambilan hadiah waktu CI (Ceremony of Informatics).</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Pengumuman Semifinal ITFest</b>
                                        <p align="left" style="font-size: 16px">12 november 2017</p></time></p>
                                        <p align="left">Pengumuman semifinal ITFest diinformasikan langsung melalui
                                            website ini.</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Technical Meeting ITFest</b>
                                        <p align="left" style="font-size: 16px">17 November 2017</p></time></p>
                                        <p align="left">Technical Meeting ITFest dilakukan di Gedung B1 Jurusan Teknik
                                            Informatika UNESA Ketintang.</p>
                                    </div>
                                </li>
                                <li id="bg_ic">
                                    <div>
                                        <p align="left">
                                            <time><b>Final ITFest</b>
                                        <p align="left" style="font-size: 16px">18 November 2017</p></time></p>
                                        <p align="left">Babak final ITFest dilakukan di Gedung Serba Guna UNESA
                                            Ketintang.</p>
                                    </div>
                                </li>
                                <li id="bg_ci">
                                    <div>
                                        <p align="left">
                                            <time><b>CI (Ceremony of Informatics)</b>
                                        <p align="left" style="font-size: 16px">25 November 2017</p></time></p>
                                        <p align="left">Seluruh puncak acara dan pembagian hadiah untuk setiap kategori
                                            lomba dilaksanakan pada momen ini.</p>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <script>
                            (function () {
                                "use strict";
                                // define variables
                                var items = document.querySelectorAll(".timeline li");

                                // check if an element is in viewport
                                // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
                                function isElementInViewport(el) {
                                    var rect = el.getBoundingClientRect();
                                    return (
                                        rect.top >= 0 &&
                                        rect.left >= 0 &&
                                        rect.bottom <=
                                        (window.innerHeight || document.documentElement.clientHeight) &&
                                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                                    );
                                }

                                function callbackFunc() {
                                    for (var i = 0; i < items.length; i++) {
                                        if (isElementInViewport(items[i])) {
                                            items[i].classList.add("in-view");
                                        }
                                    }
                                }

                                // listen for events
                                window.addEventListener("load", callbackFunc);
                                window.addEventListener("resize", callbackFunc);
                                window.addEventListener("scroll", callbackFunc);
                            })();

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->
    <script>
        @if(session('contact'))
            window.alert('{{session('contact')}}')
        @elseif(session('subscribe'))
            window.alert('{{session('subscribe')}}')
        @endif
    </script>
    <section id="contact" class="section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <div class="contact-block">
                        <div class="section-header">
                            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                                <span>Contact Us</span></h2>
                            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                            <p style="color: black; font-weight: bold">Tap me!<br>
                                <a href="http://line.me/ti/p/~agngga"><img src="/img/LINE_icon01.png" width="40"
                                                                           height="40"></a>
                                <a href="whatsapp://send?text=Hello, Angga!&phone=+6289677124206&abid=+6289677124206"><img
                                            src="/img/Whatsapp-ios-7-icon.png" width="40" height="40"></a></p>
                        </div>
                        <form role="form" method="post" action="{{ route('contact.submit') }}">
                            {{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        @if(Auth::check())
                                            <input value="{{ Auth::user()->nama}}" type="text" class="form-control"
                                                   id="name" name="nama" placeholder="Your Name" required
                                                   data-error="Please enter your name" style="color: #999999">
                                        @else
                                            <input type="text" class="form-control" id="name" name="nama"
                                                   placeholder="Your Name" required data-error="Please enter your name"
                                                   style="color: #999999">
                                        @endif
                                        <div class="help-block with-errors"></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        @if(Auth::check())
                                            <input value="{{ Auth::user()->email}}" type="text" placeholder="Your Email"
                                                   id="email" class="form-control" name="email" required
                                                   data-error="Please enter your email" style="color: #999999">
                                        @else
                                            <input type="text" placeholder="Your Email" id="email" class="form-control"
                                                   name="email" required data-error="Please enter your email"
                                                   style="color: #999999">
                                        @endif
                                        <div class="help-block with-errors"></div>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <input name="subject" type="text" placeholder="Subject" id="msg_subject"
                                               class="form-control"

                                               required data-error="Please enter your subject" style="color: #999999">

                                        <div class="help-block with-errors"></div>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">

                                    <textarea name="message" class="form-control" placeholder="Your Message" rows="11"

                                              data-error="Write your message" required
                                              style="color: #999999"></textarea>

                                        <div class="help-block with-errors"></div>

                                    </div>

                                    <div class="submit-button text-center">

                                        <button class="btn btn-common2" type="submit">Send Message</button>

                                        <div id="msgSubmit" class="h3 text-center hidden"></div>

                                        <div class="clearfix"></div>

                                    </div>

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Subcribe Section Start -->
    <div id="subscribe" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><span>Subscribe Newsletter</span>
                </h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Subscribe to get
                    all
                    latest news from us.</p>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <form action="{{route('subscribe.submit')}}" class="text-center form-inline wow fadeInUp"
                          data-wow-delay="0.3s" role="form" method="post">
                        {{csrf_field()}}
                        @if(Auth::check())
                            <input value="{{Auth::user()->email}}" class="mb-20 form-control" name="email"
                                   placeholder="Your Email Address">
                        @else
                            <input class="mb-20 form-control" name="email" placeholder="Your Email Address">
                        @endif
                        <button class="sub_btn">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Subcribe Section End -->
@endsection
{{--<div id="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>--}}
