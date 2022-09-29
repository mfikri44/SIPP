@extends('admin.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Detail Data Keterangan</h1>
                   
                    <!-- DataTales Utama -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Keterangan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pemohon</th>
                                            <th>Berlaku Mulai</th>
                                            <th>Berlaku Sampai</th>
                                            <th>Keperluan</th>
                                            <th>Keterangan Lain</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nama_pemohon}}</td>
                                          <td>{{$cat->berlaku_mulai}}</td>
                                          <td>{{$cat->berlaku_sampai}}</td>
                                          <td>{{$cat->keperluan}}</td>
                                          <td>{{$cat->keterangan_lain}}</td>
                                          <td> @if ($cat->status == 1)
                                                    Diterima
                                                @elseif($cat->status == 2)
                                                    Pending
                                                @elseif($cat->status == 3)
                                                    Ralat
                                                @endif
                                          </td>
                                          <td>
                                            @if ($cat->status == 1)
                                                <a href="{{ url('surat-keterangan/download/'.$cat->id_keterangan) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @elseif ($cat->status == 3)
                                                <!-- <a href="{{ url('surat-keterangan/edit/'.$cat->id_keterangan) }}" class="btn btn-primary mb-2">  
                                                    <i class="fa fa-edit"></i>
                                                    Edit    
                                                </a> -->
                                            @endif
                                            <a href="{{ url('surat-keterangan/delete/'.$cat->id_keterangan) }}" class="btn btn-danger mb-2">  
                                                <i class="fa fa-times"></i>
                                                Hapus
                                            </a>
                                          </td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                   <!-- DataTales Persyaratan -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Persyaratan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Foto Pengantar RT</th>
                                            <th>Foto KK</th>
                                            <th>Foto KTP</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_pengantar_rt) }}"></td>
                                          <td><img width="100px" src="{{ url('file/kk/'.$cat->file_kk) }}"></td>
                                          <td><img width="100px" src="{{ url('file/ktp/'.$cat->file_ktp) }}"></td>
                                         
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Pemohon -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pemohon</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Agama</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nama_pemohon}}</td>
                                          <td>{{$cat->jenis_kelamin_pemohon}}</td>
                                          <td>{{$cat->tempat_lahir_pemohon}}, {{$cat->tanggal_lahir_pemohon}}</td>
                                          <td>{{$cat->agama_pemohon}}</td>
                                         
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection