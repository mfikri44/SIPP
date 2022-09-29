@extends('admin.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Detail Data Kematian</h1>
                   
                    <!-- DataTales Utama -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Kematian</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama KK</th>
                                            <th>No KK</th>
                                            <th>Nama Jenazah</th>
                                            <th>Waktu Meninggal</th>
                                            <th>Sebab</th>
                                            <th>Menarangkan Kematian</th>
                                            <th>Status Surat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nama_kk}}</td>
                                          <td>{{$cat->no_kk}}</td>
                                          <td>{{$cat->tanggal_kematian}}, {{$cat->jam_kematian}}</td>
                                          <td>{{$cat->sebab_kematian}}</td>
                                          <td>{{$cat->tempat_kematian}}</td>
                                          <td>{{$cat->menerangkan_kematian}}</td>
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
                                                <a href="{{ url('surat-kematian/download/'.$cat->id) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @endif
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
                                            <th>Foto KTP Ayah</th>
                                            <th>Foto KTP Ibu</th>
                                            <th>Foto KTP Saksi 1</th>
                                            <th>Foto KTP Saksi 2</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_pengantar_rt) }}"></td>
                                          <td><img width="100px" src="{{ url('file/kk/'.$cat->file_kk) }}"></td>
                                          <td><img width="100px" src="{{ url('file/ktp_ayah/'.$cat->file_ktp_ayah) }}"></td>
                                          <td><img width="100px" src="{{ url('file/ktp_ibu/'.$cat->file_ktp_ibu) }}"></td>
                                          <td><img width="100px" src="{{ url('file/ktp_saksi1/'.$cat->file_ktp_saksi1) }}"></td>
                                          <td><img width="100px" src="{{ url('file/ktp_saksi2/'.$cat->file_ktp_saksi2) }}"></td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- DataTales Ayah -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Ayah</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Umur</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Kebangsaan</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nik_ayah}}</td>
                                          <td>{{$cat->nama_ayah}}</td>
                                          <td>{{$cat->tempat_lahir_ayah}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_ayah)); }}</td>
                                          <td>{{$cat->umur_ayah}}</td>
                                          <td>{{$cat->pekerjaan_ayah}}</td>
                                          <td>{{$cat->alamat_ayah}}</td>
                                          <td>{{$cat->kewarganegaraan_ayah}}</td>
                                          <td>{{$cat->kebangsaan_ayah}}</td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- DataTales Ibu -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Ibu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Umur</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Kawin</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Kebangsaan</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nik_ibu}}</td>
                                          <td>{{$cat->nama_ibu}}</td>
                                          <td>{{$cat->tempat_lahir_ibu}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_ibu)); }}</td>
                                          <td>{{$cat->umur_ibu}}</td>
                                          <td>{{$cat->pekerjaan_ibu}}</td>
                                          <td>{{$cat->alamat_ibu}}</td>
                                          <td>{{ date("d  M Y", strtotime($cat->tanggal_kawin)); }}</td>
                                          <td>{{$cat->kewarganegaraan_ibu}}</td>
                                          <td>{{$cat->kebangsaan_ibu}}</td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Saksi 1 -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Saksi 1</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Umur</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nik_saksi1}}</td>
                                          <td>{{$cat->nama_saksi1}}</td>
                                          <td>{{$cat->tempat_lahir_saksi1}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_saksi1)); }}</td>
                                          <td>{{$cat->umur_saksi1}}</td>
                                          <td>{{$cat->pekerjaan_saksi1}}</td>
                                          <td>{{$cat->alamat_saksi1}}</td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- DataTales Saksi 2 -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Saksi 2</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Umur</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nik_saksi2}}</td>
                                          <td>{{$cat->nama_saksi2}}</td>
                                          <td>{{$cat->tempat_lahir_saksi2}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_saksi1)); }}</td>
                                          <td>{{$cat->umur_saksi2}}</td>
                                          <td>{{$cat->pekerjaan_saksi2}}</td>
                                          <td>{{$cat->alamat_saksi2}}</td>
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