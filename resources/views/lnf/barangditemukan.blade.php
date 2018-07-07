@extends('layouts.layout')

@section('content')

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="best_sellers">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">Cek Lost & Found IPB</div>
                        <ul class="clearfix">
                                <li><a href="{{ url("temuan") }}">Temuan</a></li>
                                <li><a href="{{ url("hilang") }}">Kehilangan</a></li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>

                    <div class="bestsellers_panel panel active">
                        <!-- Best Sellers Slider -->
                        <div class="bestsellers_slider slider">
                            @if ($barangs)
                            <ul>
                                @foreach ($barangs as $barang)
                                <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="{{ asset('images/best_1.png') }}" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category">{{ $barang->kategori }}</div>
                                                <div class="bestsellers_name">{{ $barang->waktu }}</div>
                                                <div class="bestsellers_price discount">Lokasi : {{ $barang->tempat }}</span></div>
                                                <!-- AddToAny BEGIN -->
	                                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="padding-left: 5px;">
                                                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                                            <a class="a2a_button_facebook"></a>
                                                            <a class="a2a_button_twitter"></a>
                                                            <a class="a2a_button_google_plus"></a>
                                                        </div>
                                                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                <!-- AddToAny END -->
                                                <div class="button banner_button"><a href="{{ url("/klaim/create/$barang->id") }}">Klaim </a></div>
                                            </div>
                                        </div>	
                                    </div>
                                    <br>
                                @endforeach
                            </ul>
                            @else 
                                <p>tidak ada daftar barang</p>
                            @endif
                            <!-- Best Sellers Item -->
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>

@endsection
