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

    <section id="form" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary" style="border-color: black">
                        <div class="panel-heading"
                             style="background: #000;border-color: #000;text-transform: uppercase"><strong>Unggah Url
                                Project dan Youtube</strong></div>

                        <div class="panel-body">
                            <form class="form-horizontal" action="{{ route('unggah.url.bisnis') }}" method="post">

                                {{ csrf_field() }}

                                {{ method_field('put') }}

                                <div class="form-group{{ $errors->has('urlyoutube') ? ' has-error' : '' }} has-feedback">
                                    <label class="control-label col-md-3" for="urlyoutube">Url Youtube</label>
                                    <div class="col-md-8">
                                        <input id="urlyoutube" type="text"
                                               class="form-control" name="urlyoutube"
                                               value="{{ old('urlyoutube') }}" required autofocus>
                                        @if ($errors->has('urlyoutube'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('urlyoutube') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('urlproject') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3" for="urlproject">Url Project</label>
                                    <div class="col-md-8">
                                        <input id="urlproject" type="text"
                                               class="form-control" name="urlproject"
                                               value="{{ old('urlproject') }}" required>
                                        @if ($errors->has('urlproject'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('urlproject') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('urlproposal') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3" for="urlproposal">Url Project</label>
                                    <div class="col-md-8">
                                        <input id="urlproposal" type="text"
                                               class="form-control" name="urlproposal"
                                               value="{{ old('urlproposal') }}" required>
                                        @if ($errors->has('urlproposal'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('urlproposal') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-8">
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

                                            #simpan {
                                                margin: 0;
                                            }
                                        </style>
                                        <button id="simpan" type="submit" class="btn btn-common2">SIMPAN</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-8 alert alert-info">
                                        <table>
                                            <tr>
                                                <td><i class="fa fa-info-circle"></i></td>
                                                <td>&nbsp;</td>
                                                <td>Unggah project anda pada Google Drive dan pastikan
                                                    file tersebut telah diatur sebagai public.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-8 alert alert-danger">
                                        <table>
                                            <tr>
                                                <td><i class="fa fa-warning"></i></td>
                                                <td>&nbsp;</td>
                                                <td>Pastikan data yang anda kirimkan adalah benar, karena anda tidak
                                                    bisa
                                                    melakukan pengeditan setelah menekan tombol "Simpan".
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection