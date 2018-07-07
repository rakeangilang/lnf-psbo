@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>index barang</h1>
        @if ($barangs)
            <ul>
                @foreach ($barangs as $barang)
                    <li><a href=""> {{ $barang->nama_barang }} </a></li>
                @endforeach
            </ul>
        @else 
            <p>tidak ada daftar barang</p>
        @endif
      </div>
    </div>
  </div>
   
@endsection