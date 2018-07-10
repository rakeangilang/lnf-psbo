@extends('layouts.master')
@section('content')

        <!-- page content -->
        


            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Klaim</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th colspan="4">Pengklaim</th>
                          <th colspan="3">Penemu</th>
                          <th rowspan="2">Verifikasi</th>
                        </tr>
                        <tr>
                          <th>Nama Pengklaim</th>
                          <th>Nama barang</th>
                          <th>Deskripsi</th>
                          <th>Foto</th>
                          <!-- <th>Nama Penemu</th> -->
                          <th>Nama barang</th>
                          <th>Dekripsi</th>
                          <th>Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($tampil as $dt)
                            <tr>
                                <td>{{$dt->name}}</td>
                                <td>{{$dt->barang_klaim}}</td>
                                <td>{{$dt->deskripsi_klaim}}</td>
                                <td>{{$dt->foto_klaim}}</td>
                                <!-- <td>{{$dt->id_user}}</td> -->
                                <td>{{$dt->nama_barang}}</td>
                                <td>{{$dt->deskripsi}}</td>
                                <td>{{$dt->foto_barang}}</td>
                                <td>
                                <a href="#" class="btn btn-info" style="margin:8px;">Accept</a>
                                <a href="#" class="btn btn-danger" style="margin:8px;">Tolak</a>
                                </td>
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