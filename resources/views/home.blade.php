@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Selamat Datang</div>

                    <div class="panel-body">
                        Anda berhasil mendaftar pada kompetisi {{ Auth::user()->lomba()->first()->nama }}
                    </div>
                </div>
            </div>
        </div>

        @if(Auth::user()->lomba()->first()->kode == 'logicwar')
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Username dan Password</div>

                        <div class="panel-body">
                            Untuk proses pengisian soal secara online, anda dapat menggunakan identitas berikut :<br/>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">Unggah Project Anda</div>

                        <div class="panel-body">
                            Unggah project anda pada Google Drive dan video pada youtube, dan kirimkan url-nya pada tautan berikut<br/>
                            <a href="{{ route('unggah.url.animasi') }}" class="btn btn-primary">Kirim Url Project dan Video</a>
                            <p class="alert alert-danger">Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya, setelah anda mengirim url project, anda tidak dapat melakukan pengeditan atau pengubahan</p>
                        </div>
                    </div>
                    @else
                    <div class="panel panel-default">
                        <div class="panel-heading">Project anda</div>

                        <div class="panel-body">
                            Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                            <b>Url youtube</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_youtube }}">{{ Auth::user()->lomba()->first()->pivot->url_youtube }}</a><br/>
                            <b>Url project</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
                        </div>
                    </div>
                        @endif
                </div>
            </div>
        @endif

        @if(Auth::user()->lomba()->first()->kode == 'desainweb')
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @if(is_null(Auth::user()->lomba()->first()->pivot->url_youtube))
                    <div class="panel panel-default">
                        <div class="panel-heading">Unggah Project Anda</div>

                        <div class="panel-body">
                            Unggah project anda pada Google Drive, dan kirimkan url-nya pada tautan berikut<br/>
                            <a href="{{ route('unggah.url.desainweb') }}" class="btn btn-primary">Kirim Url Project</a>
                            <p class="alert alert-danger">Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya, setelah anda mengirim url project, anda tidak dapat melakukan pengeditan atau pengubahan</p>
                        </div>
                    </div>
                    @else
                    <div class="panel panel-default">
                        <div class="panel-heading">Project anda</div>

                        <div class="panel-body">
                            Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                            <b>Url project</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">Unggah Project Anda</div>

                        <div class="panel-body">
                            Unggah project anda pada Google Drive, proposal dan video pada youtube, dan kirimkan url-nya pada tautan berikut<br/>
                            <a href="{{ route('unggah.url.bisnis') }}" class="btn btn-primary">Kirim Url Project</a>
                            <p class="alert alert-danger">Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya, setelah anda mengirim url project, anda tidak dapat melakukan pengeditan atau pengubahan</p>
                        </div>
                    </div>
                    @else
                    <div class="panel panel-default">
                        <div class="panel-heading">Project anda</div>

                        <div class="panel-body">
                            Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                            <b>Url youtube</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_youtube }}">{{ Auth::user()->lomba()->first()->pivot->url_youtube }}</a><br/>
                            <b>Url proposal</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_proposal }}">{{ Auth::user()->lomba()->first()->pivot->url_proposal }}</a><br/>
                            <b>Url project</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">Unggah Project Anda</div>

                        <div class="panel-body">
                            Unggah project anda pada Google Drive dan video pada youtube, dan kirimkan url-nya pada tautan berikut<br/>
                            <a href="{{ route('unggah.url.game') }}" class="btn btn-primary">Kirim Url Project dan Video</a>
                            <p class="alert alert-danger">Anda hanya bisa melakukan pengiriman url satu kali saja. Artinya, setelah anda mengirim url project, anda tidak dapat melakukan pengeditan atau pengubahan</p>
                        </div>
                    </div>
                    @else
                    <div class="panel panel-default">
                        <div class="panel-heading">Project anda</div>

                        <div class="panel-body">
                            Anda telah mengunggah project anda dengan keterangan sebagai berikut : <br/>
                            <b>Url youtube</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_youtube }}">{{ Auth::user()->lomba()->first()->pivot->url_youtube }}</a><br/>
                            <b>Url project</b> : <a href="{{ Auth::user()->lomba()->first()->pivot->url_project }}">{{ Auth::user()->lomba()->first()->pivot->url_project }}</a>
                        </div>
                    </div>
                        @endif
                </div>
            </div>
        @endif

    </div>
@endsection
