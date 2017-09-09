<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Rabbit Media">
    <title>X - Project 3.0</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    @yield('socmed')
</head>
<body>
<div class="menu-wrap">
    <nav class="menu navbar">
        <div class="icon-list navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#video-area">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/xproject#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/xproject#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('ifc/xproject')}}">IFC</a>
                </li>
                <style>
                    .menu_body {
                        display: none;
                    }

                    .menu_body a {
                        position: relative;
                        display: block;
                        text-decoration: none;
                    }
                </style>
                <li class="nav-item">
                    <a class="nav-link menu_head" href="#">IC</a>
                    <div class="menu_body">
                        <a href="{{url('ic/xproject/logicwar')}}">Logic War</a>
                        <a href="{{url('ic/xproject/itfest')}}">ITFest</a>
                    </div>
                    <a class="nav-link menu_head1" href="#">CI</a>
                    <div class="menu_body">
                        <a href="{{url('ci/xproject/wdc')}}">WDC</a>
                        <a href="{{url('ci/xproject/ipc')}}">IPC</a>
                    </div>
                    @if(Auth::check())
                        <a class="nav-link menu_head2" href="#"><i class="fa fa-user">&nbsp;</i>{{ Auth::user()->email}}
                        </a>
                        <div class="menu_body">
                            @if(Auth::user()->lomba()->first()->kode == 'logicwar')
                                <a href="{{url('/dashboard#form')}}"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a>
                            @else
                                <a href="{{url('/dashboard#form')}}"><i class="fa fa-upload"></i>&nbsp;Upload
                                    Project</a>
                            @endif
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>&nbsp;Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    @else
                        <a class="nav-link" href="{{url('login#form')}}">Login/Register</a>
                    @endif
                </li>
                <script>
                    $("a.menu_head").click(function () {
                        $(this).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
                    });
                    $("a.menu_head1").click(function () {
                        $(this).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
                    });
                    $("a.menu_head2").click(function () {
                        $(this).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
                    });
                </script>
            </ul>
        </div>
    </nav>
    <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
</div>

@yield('content')

<!-- Footer Section Start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <ul>
                        <li class="facebook"><a href="https://www.facebook.com/Informatikaunesa/"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="https://twitter.com/himti_unesa"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="instagram"><a href="https://www.instagram.com/xprojecttif/"><i
                                        class="fa fa-instagram"></i></a></li>
                        <li class="naverline"><a href="http://line.me/ti/p/~UCW6451E"><img src="/img/line_outline.png"
                                                                                           width="70%"></a></li>
                    </ul>
                </div>
                <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <style>
                        #rm:hover {
                            color: #FD30ED;
                        }
                    </style>
                    <p>All copyrights reserved &copy; 2017 - Designed by <a id="rm" rel="nofollow"
                                                                            href="http://rabbit-media.net/">Rabbit
                            Media</a>, System by <a rel="nofollow"
                                                    href="https://www.instagram.com/bagasmuharom/">Smadia</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="lnr lnr-arrow-up"></i>
</a>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="{{ asset('js/jquery-min.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/mixitup.min.js') }}"></script>
<script src="{{ asset('js/nivo-lightbox.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.nav.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.js') }}"></script>
<script src="{{ asset('js/smooth-on-scroll.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/jquery.vide.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/form-validator.min.js') }}"></script>
<script src="{{ asset('js/contact-form-script.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
