@extends('layouts.master')
@section('content')

        <!-- page content -->
        


            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Histori</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Jenis Laporan</th>
                          <th>Nama</th>
                          <th>Jenis Barang</th>
                          <th>Nama barang</th>
                          <th>Deskripsi</th>
                          <th>Tempat</th>
                          <th>Waktu</th>
                          <th>Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($tampil as $dt)
                            <tr>
                                <td>{{$dt->jenis}}</td>
                                <td>{{$dt->name}}</td>
                                <td>{{$dt->kategori}}</td>
                                <td>{{$dt->nama_barang}}</td>
                                <td>{{$dt->deskripsi}}</td>
                                <td>{{$dt->tempat}}</td>
                                <td>{{$dt->waktu}}</td>
                                <td>{{$dt->foto_barang}}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


@endsection