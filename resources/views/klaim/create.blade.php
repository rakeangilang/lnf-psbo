@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">klaim barang {{$barang->nama_barang}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('klaim.store') }}" enctype='multipart/form-data'>
                        {{ csrf_field() }}

                        <input type="hidden" id="id_barang" name="id_barang" value=" {{$barang->id}} ">
                        <input type="hidden" id="status" name="status" value="proses">

                        <div class="form-group{{ $errors->has('nama_barang') ? ' has-error' : '' }}">
                            <label for="nama_barang" class="col-md-4 control-label">Nama barang :</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control" name="nama_barang" required autofocus>

                                @if ($errors->has('nama_barang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('foto_barang') ? ' has-error' : '' }}">
                            <label for="foto_barang" class="col-md-4 control-label">Foto barang :</label>

                            <div class="col-md-6">
                                <input type="file" id="foto_barang" name="foto_barang" class="form-control" accept="image/*">

                                @if ($errors->has('foto_barang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi :</label>

                            <div class="col-md-6">
                                <textarea id="deskripsi" rows="4" cols="50" type="text" class="form-control" name="deskripsi" required></textarea>

                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" >
                                    Laporkan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection