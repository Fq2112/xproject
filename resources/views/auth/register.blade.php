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
                    <span>Form Pendaftaran</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Isi dengan
                    lengkap dan benar.</p>
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
                                <progress class="progress" value="0" max="100"
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
                            <div class="label" style="color: black">E-Ticket</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-lg-offset-2">
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
                    <form id="daftar" class="form-horizontal" role="form" method="post" action="{{ route('register.submit') }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-md-3" for="lomba">Bidang Lomba</label>
                            <div class="col-md-6">
                                <select class="form-control" name="lomba" id="lomba" required>
                                    <option value="ifc">IFC</option>
                                    <option value="logicwar">Logic War</option>
                                    <option value="itfest">ITFest</option>
                                    <option value="wdc">WDC</option>
                                    <option value="ipc">IPC</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="aitfest">
                            <label class="control-label col-md-3" for="kategoriitf">Bidang Kategori yang Diikuti</label>
                            <div class="col-md-6">
                                <select class="form-control" name="kategoriitf" id="kategoriitf" required>
                                    <option value="animasi">Animasi</option>
                                    <option value="bisnis">Pengembangan Bisnis</option>
                                    <option value="game">Pengembangan Game</option>
                                    <option value="web">Desain Web</option>
                                    <option value="pes">PES 2017</option>
                                </select>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $("#aitfest").hide(10);
                                $("#lomba").change(function () {
                                    if ($("#lomba").val() == "itfest") {
                                        $("#aitfest").show(300);
                                    }
                                    else {
                                        $("#aitfest").hide(300);
                                    }
                                });
                            });
                        </script>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="email">E-mail</label>
                            <div class="col-md-6">
                                <input placeholder="contoh: fiqy_a@yahoo.com" id="email" type="email"
                                       class="form-control" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="password">Password</label>
                            <div class="col-md-6">
                                <input placeholder="minimal 6 karakter!" id="password" type="password"
                                       class="form-control" name="password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="nama">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input type="text" value="{{ old('nama') }}" class="form-control" name="nama" placeholder="nama lengkap..."
                                       required autofocus>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('instansi') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="instansi">Asal Instansi/Sekolah</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="instansi" value="{{ old('instansi') }}"
                                       placeholder="asal instansi/sekolah..."
                                       required autofocus>
                                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="tempat_lahir">Tempat Lahir</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="contoh: surabaya"
                                       name="tempat_lahir" value="tempat_lahir" required>
                                <span class="glyphicon glyphicon-bed form-control-feedback"></span>
                                @if ($errors->has('tempat_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="tgl_lahir">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" value="{{ old('tgl_lahir') }}" name="tgl_lahir" required>
                                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                @if ($errors->has('tgl_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('asal') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="nama">Asal Daerah</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ old('asal') }}" name="asal" placeholder="daerah asal..."
                                       required autofocus>
                                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                @if ($errors->has('asal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="alamat">Alamat Tinggal</label>
                            <div class="col-md-6">
                                <input type="text" value="{{ old('alamat') }}" class="form-control" name="alamat" placeholder="alamat sekarang..."
                                       required autofocus>
                                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} has-feedback">
                            <label class="control-label col-md-3" for="alamat">Nomor Handphone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="phone" name="phone"
                                       placeholder="Masukkan Nomor Handphone"
                                       onkeypress="return hanyaAngka(event, false)" maxlength="13" required autofocus>
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                <script>
                                    function hanyaAngka(e, decimal) {
                                        var key;
                                        var keychar;
                                        if (window.event) {
                                            key = window.event.keyCode;
                                        } else if (e) {
                                            key = e.which;
                                        } else return true;
                                        keychar = String.fromCharCode(key);
                                        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
                                            return true;
                                        } else if ((("0123456789").indexOf(keychar) > -1)) {
                                            return true;
                                        } else if (decimal && (keychar == ".")) {
                                            return true;
                                        } else return false;
                                    }
                                </script>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-6">
                                <button type="submit" class="btn btn-common2">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

