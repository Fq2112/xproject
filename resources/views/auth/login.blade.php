@extends('layouts.xproject.master')

@section('content')

    <link rel="stylesheet" href="css/custom.css">

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



    <section id="contact" class="section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <div class="formPage">
                        <nav class="formCtlWrapper">
                            <a href="#" class="btn login active" data-tab="tab-1">login</a>
                            <i></i>
                            <a href="#" class="btn register" data-tab="tab-2">register</a>
                        </nav>

                        <form name="loginform" class="login formBlock active" id="tab-1">
                            <h4>Login:</h4>
                            <div class="input-group">
                                <p class="formLabel">Email</p>
                                <input type="text" name="email" id="email" autocomplete="off">
                            </div>
                            <div class="input-group">
                                <p class="formLabel">Password</p>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="checkbox-group">
                                <label class="form-remember">
                                    <input type="checkbox"> <span>Remember Me</span>
                                </label>
                                <a href="#" class="form-recovery">Forgot Password?</a>
                            </div>
                            <p id="errors" class="error"></p>
                            <div class="form-group">
                                <button type="submit" onclick="return validateLogin();">Log In</button>
                            </div>
                        </form>
                        <form name="registerform" class="register formBlock" id="tab-2">
                            <h4>Register:</h4>
                            <div class="input-group">
                                <p class="formLabel">Username</p>
                                <input type="text" id="username" name="username" autocomplete="off">
                            </div>
                            <div class="input-group">
                                <p class="formLabel">Password</p>
                                <input type="password" id="password" name="password">
                            </div>
                            <div class="input-group">
                                <p class="formLabel">Confirm Password</p>
                                <input type="password" id="cpassword" name="cpassword">
                            </div>
                            <div class="input-group">
                                <p class="formLabel">Email Address</p>
                                <input type="text" id="email" name="email" autocomplete="off">
                            </div>
                            <p id="registererrors" class="error"></p>
                            <div class="form-group">
                                <button type="submit" id="registerSubmit" onclick="return validateRegister();">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div> <!-- /.formPage -->
                </div>
            </div>
        </div>
    </section>

    <script src="/js/custom.js"></script>

@endsection
