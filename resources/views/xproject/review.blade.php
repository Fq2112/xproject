@extends('layouts.xproject.master')
@section('socmed')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/w3.css" rel="stylesheet">
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

        #form_xpro .btn {
            margin: 0;
        }

        .progress {
            display: block;
            width: 100%;
            height: 12px;
            position: relative;
            z-index: 5;
            padding-right: 8px;
            padding-top: 2px;
        }

        @media all and (min--moz-device-pixel-ratio: 0) and (min-resolution: 30dpcm) {
            .progress {
                height: 10px;
            }
        }

        .progress[value] {
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0;
        }

        .progress[value]::-ms-fill {
            background-color: #0074d9;
            border: 0;
        }

        .progress[value]::-moz-progress-bar {
            background-color: #0074d9;
            margin-right: 8px;
        }

        .progress[value]::-webkit-progress-inner-element {
            background-color: #eee;
        }

        .progress[value]::-webkit-progress-value {
            background-color: #0074d9;
        }

        .progress[value]::-webkit-progress-bar {
            background-color: #eee;
        }

        .progress-circle {
            width: 24px;
            height: 24px;
            position: absolute;
            right: 3px;
            top: -5px;
            z-index: 5;
            border-radius: 50%;
        }

        .progress-circle:before {
            content: "";
            width: 6px;
            height: 6px;
            background: white;
            border-radius: 50%;
            display: block;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
        }

        .progress-group {
            margin-top: 36px;
        }

        @media (max-width: 991px) {
            .progress-group {
                margin-left: -18px;
                margin-right: -18px;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                padding: 18px;
            }
        }

        @media (max-width: 768px) {
            .progress-group {
                padding: 18px 18px 0;
                margin-bottom: 12px;
            }
        }

        .progress-group .title {
            margin-bottom: 18px;
        }

        .progress-group .wrapper {
            background: white;
            border: 1px solid #eee;
            border-radius: 12px;
            height: 14px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.3));
            filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.3));
        }

        .progress-group .step {
            width: 20%;
            position: relative;
        }

        .progress-group .step:after {
            content: "";
            height: 30px;
            width: 30px;
            background: white;
            border-radius: 50%;
            display: block;
            position: absolute;
            right: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .progress-group .step:first-of-type .progress {
            padding-left: 4px;
        }

        .progress-group .step:first-of-type .progress[value]::-moz-progress-bar {
            border-radius: 5px 0 0 5px;
        }

        .progress-group .step:first-of-type .progress[value]::-webkit-progress-value {
            border-radius: 5px 0 0 5px;
        }

        .progress-group .step:not(:first-of-type) .progress[value]::-moz-progress-bar {
            border-radius: 0;
        }

        .progress-group .step:not(:first-of-type) .progress[value]::-webkit-progress-value {
            border-radius: 0;
        }

        .progress-group .step .progress[value] + .progress-circle {
            background: #eee;
        }

        .progress-group .step.step01 .progress[value]::-moz-progress-bar {
            background-color: #23607d;
        }

        .progress-group .step.step01 .progress[value]::-webkit-progress-value {
            background-color: #23607d;
        }

        .progress-group .step.step01 .progress[value="100"] + .progress-circle {
            background-color: #23607d;
        }

        .progress-group .step.step02 .progress[value]::-moz-progress-bar {
            background-color: #2686a4;
        }

        .progress-group .step.step02 .progress[value]::-webkit-progress-value {
            background-color: #2686a4;
        }

        .progress-group .step.step02 .progress[value="100"] + .progress-circle {
            background-color: #2686a4;
        }

        .progress-group .step.step03 .progress[value]::-moz-progress-bar {
            background-color: #30a6cd;
        }

        .progress-group .step.step03 .progress[value]::-webkit-progress-value {
            background-color: #30a6cd;
        }

        .progress-group .step.step03 .progress[value="100"] + .progress-circle {
            background-color: #30a6cd;
        }

        .progress-group .step.step04 .progress[value]::-moz-progress-bar {
            background-color: #26c4c3;
        }

        .progress-group .step.step04 .progress[value]::-webkit-progress-value {
            background-color: #26c4c3;
        }

        .progress-group .step.step04 .progress[value="100"] + .progress-circle {
            background-color: #26c4c3;
        }

        .progress-group .step.step05 .progress[value]::-moz-progress-bar {
            background-color: #10C895;
        }

        .progress-group .step.step05 .progress[value]::-webkit-progress-value {
            background-color: #10C895;
        }

        .progress-group .step.step05 .progress[value="100"] + .progress-circle {
            background-color: #10C895;
        }

        .progress-labels {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .progress-labels .label {
            text-align: center;
            text-transform: uppercase;
            margin: 12px 0;
            width: 20%;
            font-size: 11px;
            padding-right: 24px;
            font-weight: 600;
            opacity: 0.7;
        }
    </style>

    <section id="form" class="section">
        <div class="container">
            <div class="section-header" style="margin-bottom: 0px">
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <span>Review Data</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Cek data yang
                    telah anda isikan sebelumnya.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="progress-group">
                        <div class="wrapper">
                            <div class="step step01 complete">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 01"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step02">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 02"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step03">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 03"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step04 complete">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 04"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step05">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 05"></progress>
                                <div class="progress-circle"></div>
                            </div>
                        </div>
                        <div class="progress-labels">
                            <div class="label" style="color: black">Isi Data</div>
                            <div class="label" style="color: black">Review</div>
                            <div class="label" style="color: black">Pembayaran</div>
                            <div class="label" style="color: black">Proses</div>
                            <div class="label" style="color: black">Hak Akses</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <style>
                        #daftar select {
                            height: 35px;
                        }

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
                    <br>
                    <div class="w3-container col-md-12">
                        <div class="col-md-12">
                            <h2><i class="fa fa-user"></i> Identitas Diri</h2>
                            <div class="w3-panel w3-card"><br>
                                <table>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>&nbsp;:&nbsp;&nbsp;</td>
                                        <td><strong>{{ Session::get('nama') }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td><br>Asal Instansi/Sekolah</td>
                                        <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                        <td><br><strong>{{ Session::get('instansi') }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td><br>Alamat Email</td>
                                        <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                        <td><br><strong>{{ Session::get('email') }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td><br>No. Telp/HP</td>
                                        <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                        <td><br><strong>{{ Session::get('no_telp') }}</strong></td>
                                    </tr>
                                </table>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <br>
                            <h2><i class="fa fa-tags"></i> Detail Lomba yang Diikuti</h2>
                            <div class="w3-panel w3-card">
                                <div class="col-md-14">
                                    <div class="col-md-10">
                                        <br>
                                        <table>
                                            <tr>
                                                <td><br>Bidang Lomba</td>
                                                <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                                <td><br><strong>{{ Session::get('lomba') }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td><br>Bidang Kategori yang Diikuti</td>
                                                <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>
                                                    <br><strong>{{ Session::get('lomba') == 'itfest' ? Session::get('kategori') : '-' }}</strong>
                                                </td>
                                            </tr>
                                        </table>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><br>
                            <h2><i class="fa fa-hand-o-right"></i> Tahap Selanjutnya</h2>
                            <div class="w3-panel w3-card-4"><br>
                                <div class="col-md-12 text-center">
                                    <h3>Lanjut ke Pembayaran</h3>
                                    <form action="{{ route('register.final') }}" method="post">

                                        {{ csrf_field() }}

                                        <input type="hidden" name="nama" value="{{ Session::get('nama') }}"/>
                                        @if(Session::get('lomba') == 'itfest')
                                        <input type="hidden" name="kategoriitf" value="{{ Session::get('kategoriitf') }}"/>
                                        @endif
                                        <input type="hidden" name="lomba" value="{{ Session::get('lomba') }}"/>
                                        <input type="hidden" name="email" value="{{ Session::get('email') }}"/>
                                        <input type="hidden" name="password" value="{{ bcrypt(Session::get('password')) }}"/>
                                        <input type="hidden" name="instansi" value="{{ Session::get('instansi') }}"/>
                                        <input type="hidden" name="tempat_lahir" value="{{ Session::get('tempat_lahir') }}"/>
                                        <input type="hidden" name="tgl_lahir" value="{{ Session::get('tgl_lahir') }}"/>
                                        <input type="hidden" name="asal" value="{{ Session::get('asal') }}"/>
                                        <input type="hidden" name="alamat" value="{{ Session::get('alamat') }}"/>
                                        <input type="hidden" name="phone" value="{{ Session::get('phone') }}"/>

                                        <button title="Dengan mengklik tombol ini maka anda telah menyetujui syarat dan ketentuan yang berlaku."
                                                data-toggle="tooltip" data-placement="bottom" type="submit"
                                                class="btn btn-common2"><strong>PEMBAYARAN <i
                                                        class="fa fa-chevron-right"></i>
                                            </strong>
                                        </button>
                                    </form>
                                    <h6>&nbsp;</h6>
                                    <script>
                                        $(document).ready(function () {
                                            $('[data-toggle="tooltip"]').tooltip();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

