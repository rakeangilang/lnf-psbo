@extends('layouts.master')
@section('content')

        <!-- page content -->
        


            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Kehilangan</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nama Pelapor</th>
                          <th>Jenis Barang</th>
                          <th>Nama barang</th>
                          <th>Deskripsi</th>
                          <th>Tempat</th>
                          <th>Waktu</th>
                          <th>Foto</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($tampil as $dt)
                            <tr>
                                <td>{{$dt->name}}</td>
                                <td>{{$dt->kategori}}</td>
                                <td>{{$dt->nama_barang}}</td>
                                <td>{{$dt->deskripsi}}</td>
                                <td>{{$dt->tempat}}</td>
                                <td>{{$dt->waktu}}</td>
                                <td>{{$dt->foto_barang}}</td>
                                <td>
                                {{ Form::open() }}
                                <!-- @if($dt->status == 1) -->
                                    {{ Form::hidden('status', 0, ['id' => 'status']) }}
                                    <button type="submit" class="btn btn-info" value="0">Selesai</a>
                                <!-- @else
                                    <button type="submit" class="btn btn-primary" value="0">Belum</a> -->
                                <!-- @endif -->
                                {{ Form::close() }}
                                <!-- <a href="#edit" data-toggle="modal" class="btn btn-info" style="margin:8px;">Selesai</a> -->
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