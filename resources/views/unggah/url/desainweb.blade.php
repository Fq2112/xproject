@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Unggah Url Project Web</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ route('unggah.url.desainweb') }}" method="post">

                            {{ csrf_field() }}

                            {{ method_field('put') }}

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

                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <p class="alert alert-info">Unggah project anda pada Google Drive dan pastikan
                                        file tersebut telah diatur sebagai public</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-8">
                                    <p class="alert-danger alert">
                                        Pastikan data yang anda kirimkan adalah benar, karena anda tidak bisa
                                        melakukan pengeditan setelah menekan tombol "Simpan"
                                    </p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection