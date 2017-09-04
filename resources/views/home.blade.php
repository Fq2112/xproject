@extends('layouts.xproject.master')
@section('socmed')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-social-gh-pages/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-social-gh-pages/assets/css/font-awesome.css') }}" rel="stylesheet">
@endsection
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
        <div class="overlay overlay-2"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">X-Project 3.0</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Infinite
                                Spirit and Creativity"</em></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <style>
        .btn-common2 {
            margin: 0;
            color: #ffffff;
            border: 2px solid #000000;
            background-color: #000000;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-common2:hover {
            margin: 0;
            color: #000000;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #000000;
            transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }
    </style>
    <section id="form" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default" style="border-color: black">
                        <div class="panel-heading"
                             style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                            Selamat Datang
                        </div>

                        <div class="panel-body">
                            Anda berhasil mendaftar pada kompetisi {{ Auth::user()->lomba()->first()->nama }}
                        </div>
                    </div>
                </div>
            </div>

            @if(Auth::user()->lomba()->first()->kode == 'logicwar')
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default" style="border-color: black">
                            <div class="panel-heading"
                                 style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                Username dan Password
                            </div>

                            <div class="panel-body">
                                Untuk proses pengisian soal secara online, anda dapat menggunakan identitas berikut
                                :<br/>
                                <b>Username : </b> {{ Auth::user()->lomba()->first()->pivot->username }}<br/>
                                <b>Password : </b> {{ Auth::user()->lomba()->first()->pivot->token }}<br/>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(Auth::user()->lomba()->first()->kode == 'animasi')
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if(is_null(Auth::user()->lomba()->first()->pivot->url_youtube))
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Unggah Project Anda
                                </div>

                                <div class="panel-body">
                                    Unggah project anda pada Google Drive dan video pada youtube, dan kirimkan url-nya
                                    pada tautan berikut.<br><br>
                                    <a href="{{ route('unggah.url.animasi') }}" class="btn btn-common2">Kirim Url
                                        Project dan Video</a>
                                    <hr>
                                    <div class="col-xs-12 alert alert-danger">
                                        <table>
                                            <tr>
                                                <td><i class="fa fa-warning"></i></td>
                                                <td>&nbsp;</td>
                                                <td>Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya,
                                                    setelah anda mengirim url project, anda tidak dapat melakukan
                                                    pengeditan atau pengubahan.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Project anda
                                </div>

                                <div class="panel-body">
                                    Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                                    <b>Url youtube</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_youtube }}">{{ Auth::user()->lomba()->first()->pivot->url_youtube }}</a><br/>
                                    <b>Url project</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            @if(Auth::user()->lomba()->first()->kode == 'web')
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if(is_null(Auth::user()->lomba()->first()->pivot->url_youtube))
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Unggah Project Anda
                                </div>

                                <div class="panel-body">
                                    Unggah project anda pada Google Drive, dan kirimkan url-nya pada tautan berikut.<br><br>
                                    <a href="{{ route('unggah.url.desainweb') }}" class="btn btn-common2">Kirim Url
                                        Project</a>
                                    <hr>
                                    <div class="col-xs-12 alert alert-danger">
                                        <table>
                                            <tr>
                                                <td><i class="fa fa-warning"></i></td>
                                                <td>&nbsp;</td>
                                                <td>Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya,
                                                    setelah anda mengirim url project, anda tidak dapat melakukan
                                                    pengeditan atau pengubahan.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Project anda
                                </div>

                                <div class="panel-body">
                                    Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                                    <b>Url project</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            @if(Auth::user()->lomba()->first()->kode == 'bisnis')
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if(is_null(Auth::user()->lomba()->first()->pivot->url_youtube))
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Unggah Project Anda
                                </div>

                                <div class="panel-body">
                                    Unggah project anda pada Google Drive, proposal dan video pada youtube, dan kirimkan
                                    url-nya pada tautan berikut.<br><br>
                                    <a href="{{ route('unggah.url.bisnis') }}" class="btn btn-common2">Kirim Url
                                        Project</a>
                                    <hr>
                                    <div class="col-xs-12 alert alert-danger">
                                        <table>
                                            <tr>
                                                <td><i class="fa fa-warning"></i></td>
                                                <td>&nbsp;</td>
                                                <td>Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya,
                                                    setelah anda mengirim url project, anda tidak dapat melakukan
                                                    pengeditan atau pengubahan.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Project anda
                                </div>

                                <div class="panel-body">
                                    Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                                    <b>Url youtube</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_youtube }}">{{ Auth::user()->lomba()->first()->pivot->url_youtube }}</a><br/>
                                    <b>Url proposal</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_proposal }}">{{ Auth::user()->lomba()->first()->pivot->url_proposal }}</a><br/>
                                    <b>Url project</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            @if(Auth::user()->lomba()->first()->kode == 'game')
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if(is_null(Auth::user()->lomba()->first()->pivot->url_youtube))
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Unggah Project Anda
                                </div>

                                <div class="panel-body">
                                    Unggah project anda pada Google Drive dan video pada youtube, dan kirimkan url-nya
                                    pada tautan berikut.<br><br>
                                    <a href="{{ route('unggah.url.game') }}" class="btn btn-common2">Kirim Url Project
                                        dan Video</a>
                                    <hr>
                                    <div class="col-xs-12 alert alert-danger">
                                        <table>
                                            <tr>
                                                <td><i class="fa fa-warning"></i></td>
                                                <td>&nbsp;</td>
                                                <td>Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya,
                                                    setelah anda mengirim url project, anda tidak dapat melakukan
                                                    pengeditan atau pengubahan.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="panel panel-default" style="border-color: black">
                                <div class="panel-heading"
                                     style="background: #000;border-color: #000;color: #ffffff;text-transform: uppercase">
                                    Project anda
                                </div>

                                <div class="panel-body">
                                    Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                                    <b>Url youtube</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_youtube }}">{{ Auth::user()->lomba()->first()->pivot->url_youtube }}</a><br/>
                                    <b>Url project</b> : <a
                                            href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

        </div>
    </section>

@endsection
