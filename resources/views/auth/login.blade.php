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
                    <a href="/xproject" class="logo"><img src="{{asset('img/xproject2.PNG')}}" width="15%"></a>
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

    <section id="form" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary" style="border-color: black">

                        <div class="panel-heading" style="background: #000;border-color: #000"><strong>LOGIN</strong>
                        </div>
                        <div class="panel-body">
                            {{-- @if($token && $recaptcha)
                                 <div class="alert alert-success">
                                     <strong>Confirmed!</strong> Anda 100% manusia yang hidup dan bukanlah sebuah robot.
                                     Silahkan login dengan akun anda.
                                 </div>
                             @endif--}}
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
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
                                    <label for="password" class="col-md-4 control-label">Password</label>
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
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                                                Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
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

                                            #login {
                                                margin: 0;
                                            }
                                        </style>
                                        <button id="login" type="submit" class="btn btn-common2 btn-rm">
                                            LOGIN
                                        </button>

                                        <a class="btn btn-link" href="{{ url('register#form') }}">
                                            Belum punya akun? Daftar Sekarang!
                                        </a>
                                    </div>
                                </div>
                                <style>
                                    #form_xpro .btn {
                                        margin: 0;
                                    }
                                </style>
                                {{--<div class="form-group" id="form_xpro">
                                    <div class="col-lg-auto">
                                        <div style="height: 25px; border-bottom: 1px solid rgba(0,0,0,0.1); text-align: center">
                                            <span style="font-size: 28px; background-color: #FFFFFF; padding: 0 10px;">or</span>
                                        </div>
                                        <br>
                                        <div class="col-lg-4">
                                            <a href="{{ url('/auth/facebook') }}"
                                               class="btn btn-block btn-social btn-facebook">
                                                <span class="fa fa-facebook"></span> login via Facebook
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="{{ url('/auth/twitter') }}"
                                               class="btn btn-block btn-social btn-twitter">
                                                <span class="fa fa-twitter"></span> login via Twitter
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="{{ url('/auth/google') }}"
                                               class="btn btn-block btn-social btn-google">
                                                <span class="fa fa-google-plus"></span> login via Google+
                                            </a>
                                        </div>
                                    </div>
                                </div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
