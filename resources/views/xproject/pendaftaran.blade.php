@extends('layouts.xproject.master')

@section('content')
    <link rel="stylesheet" href="/css/bootstrap.css">
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
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="pendaftaran" method="post" enctype="multipart/form-data" action="" id="pendaftaran">
                        <fieldset>
                            <div class="form-group">
                                <label style="color: #111111" for="nama">Nama</label>
                                <input required class="form-control" placeholder="Nama" name="nama" type="text" id="nama">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="instansi">Asal Instansi</label>
                                <input required class="form-control" placeholder="Asal Instansi" name="instansi" type="text" id="instansi">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="nama">Jenis Kelamin</label>
                                <select class="form-control" name="jenkel" style="height: 40px">
                                    <option value="laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="templahir">Tempat Lahir</label>
                                <input required class="form-control" placeholder="Tempat Lahir" name="templahir" type="text" id="templahir">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="tgllahir">Tanggal Lahir</label>
                                <input required class="form-control" placeholder="Tanggal Lahir" name="tgllahir" type="date" id="tgllahir">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="asal">Asal Daerah</label>
                                <input required class="form-control" placeholder="Asal Daerah" name="asal" type="text" id="asal">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="tinggal">Alamat Tinggal</label>
                                <input required class="form-control" placeholder="Alamat Tinggal" name="tinggal" type="text" id="tinggal">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="notelp">No. Handphone</label>
                                <input required class="form-control" placeholder="No. Handphone" name="notelp" type="number" id="notelp">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="email">Email</label>
                                <input required class="form-control" placeholder="Email" name="email" type="text" id="email">
                            </div>
                            <div class="form-group">
                                <label style="color: #111111" for="lomba">Bidang Lomba</label>
                                <select class="form-control" name="lomba" style="height: 40px" id="lomba">
                                    <option value="itfest">IT Fest</option>
                                    <option value="logicwar">Logic War</option>
                                    <option value="ifc">IFC</option>
                                    <option value="wdc">WDC</option>
                                    <option value="ipc">IPC</option>
                                </select>
                            </div>
                            <div class="form-group" id="aitfest">
                                <label style="color: #111111" for="kategoriit">Bidang Kategori yang Diikuti</label>
                                <select class="form-control" name="kategoriit" style="height: 40px" id="kategoriit">
                                    <option value="animasi">Animasi</option>
                                    <option value="bisnis">Pengembangan Bisnis</option>
                                    <option value="game">Pengembangan Game</option>
                                    <option value="web">Desain Web</option>
                                    <option value="pes">PES 2017</option>
                                </select>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $("#lomba").change(function(){
                if($("#lomba").val()=="itfest"){
                    $("#aitfest").show(300);
                }
                else{
                    $("#aitfest").hide(300);
                }
            });
        });
    </script>

@endsection