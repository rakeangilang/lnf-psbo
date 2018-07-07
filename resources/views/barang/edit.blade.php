@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="PUT" action="{{ route('barang.update') }}">
                        {{ csrf_field() }}

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
                                <input type="file" id="foto_barang" name="foto_barang" class="form-control" accept="image/*" required>

                                @if ($errors->has('foto_barang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tempat') ? ' has-error' : '' }}">
                            <label for="tempat" class="col-md-4 control-label">Tempat ditemukan :</label>

                            <div class="col-md-6">
                                <input id="tempat" type="text" class="form-control" name="tempat" required>

                                @if ($errors->has('tempat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('waktu') ? ' has-error' : '' }}">
                            <label for="waktu" class="col-md-4 control-label">Waktu ditemukan :</label>

                            <div class="col-md-6">
                                <input id="waktu" type="text" class="form-control" name="waktu" required>

                                @if ($errors->has('waktu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('waktu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                            <label for="kategori" class="col-md-4 control-label">kategori :</label>

                            <div class="col-md-6">
        
                                <select id="kategori" name="kategori" class="form-control" required>
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                  </select>

                                @if ($errors->has('kategori'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kategori') }}</strong>
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
                                <button type="submit" class="btn btn-primary">
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