@extends('admin.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Detail Data Kelahiran</h1>
                   
                    <!-- DataTales Utama -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Kelahiran</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama KK</th>
                                            <th>No KK</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nama_kk}}</td>
                                          <td>{{$cat->no_kk}}</td>
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
                                                <a href="{{ url('surat-kelahiran/download/'.$cat->id_keterangan) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @elseif ($cat->status == 3)
                                                <!-- <a href="{{ url('surat-kelahiran/edit/'.$cat->id_keterangan) }}" class="btn btn-primary mb-2">  
                                                    <i class="fa fa-edit"></i>
                                                    Edit    
                                                </a> -->
                                            @endif
                                            <a href="{{ url('surat-kelahiran/delete/'.$cat->id_keterangan) }}" class="btn btn-danger mb-2">  
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
                                            <th>Foto Surat Lahir</th>
                                            <th>Foto Buku Nikah</th>
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
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_kk) }}"></td>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_surat_lahir) }}"></td>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_buku_nikah) }}"></td>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_ktp_ayah) }}"></td>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_ktp_ibu) }}"></td>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_ktp_saksi1) }}"></td>
                                          <td><img width="100px" src="{{ url('file/pengantar_rt/'.$cat->file_ktp_saksi2) }}"></td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Anak -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Anak</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tempat dan Tanggal Lahir</th>
                                            <th>Waktu lahir</th>
                                            <th>Jenis Kelahiran</th>
                                            <th>Anak Ke</th>
                                            <th>Penolong Kelahiran</th>
                                            <th>Berat</th>
                                            <th>Tinggi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nama_anak}}</td>
                                          <td>{{$cat->jenis_kelamin_anak}}</td>
                                          <td>{{$cat->tempat_lahir_anak}}</td>
                                          <td>{{$cat->kota_anak}}, {{$cat->tanggal_lahir_anak}}</td>
                                          <td>{{$cat->waktu_lahir_anak}}</td>
                                          <td>{{$cat->jenis_kelahiran_anak}}</td>
                                          <td>{{$cat->anak_ke}}</td>
                                          <td>{{$cat->penolong_kelahiran}}</td>
                                          <td>{{$cat->berat_anak}}</td>
                                          <td>{{$cat->tinggi_anak}}</td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Anak -->
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
                                            <th>Tanggal Lahir</th>
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
                                          <td>{{$cat->tanggal_lahir_ayah}}</td>
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
                                            <th>Tanggal Lahir</th>
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
                                          <td>{{$cat->tanggal_lahir_ibu}}</td>
                                          <td>{{$cat->umur_ibu}}</td>
                                          <td>{{$cat->pekerjaan_ibu}}</td>
                                          <td>{{$cat->alamat_ibu}}</td>
                                          <td>{{$cat->tanggal_kawin}}</td>
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
                                            <th>Umur</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nik_saksi1}}</td>
                                          <td>{{$cat->nama_saksi1}}</td>
                                          <td>{{$cat->umur_saksi1}}</td>
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
                                            <th>Umur</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{$cat->nik_saksi2}}</td>
                                          <td>{{$cat->nama_saksi2}}</td>
                                          <td>{{$cat->umur_saksi2}}</td>
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