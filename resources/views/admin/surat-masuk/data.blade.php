@extends('admin.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Permohonan Surat Masuk</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Kelahiran</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Anak</th>
                                            <th>Nama Ibu</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Saksi1</th>
                                            <th>Nama Saksi2</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <?php
                                     $a = 0;
                                    ?>
                                    @foreach ($data_lahir as $cat)

                                    <tbody>

                                      <tr>
                                          <td>{{ ++$a }}</td>
                                          <td>{{$cat->nama_anak}}</td>
                                          <td>{{$cat->nama_ibu}}</td>
                                          <td>{{$cat->nama_ayah}}</td>
                                          <td>{{$cat->nama_saksi1}}</td>
                                          <td>{{$cat->nama_saksi2}}</td>
                                          <td> 
                                                @if ($cat->status == 1)
                                                    Diterima            
                                                @elseif($cat->status == 2)
                                                    Pending
                                                @elseif($cat->status == 3)
                                                    Ralat
                                                @endif
                                            <form method="post" class="user" action="{{ url('surat/edit-pd/' . $cat->id_kelahiran) }}" enctype="multipart/form-data">
                                            @csrf            
                                                <select name="status" class="select form-control form-control">
                                                    @if ($cat->status == 1)
                                                    <option value="2">Pending</option>
                                                    <option value="3">Ralat</option>
                                                    @elseif($cat->status == 2)
                                                    <option value="1">Diterima</option>
                                                    <option value="3">Ralat</option>
                                                    @elseif($cat->status == 3)
                                                    <option value="1">Diterima</option>
                                                    <option value="2">Pending</option>
                                                    @endif         
                                                </select>
                                                <button type="submit" class="btn btn-success btn-user btn-block" value="Edit Data">
                                                Edit
                                                </button>

                                            </form>
                                          </td>
                                          <td>
                                            @if ($cat->status == 1)
                                                <a href="{{ url('surat/download/'.$cat->id_kelahiran) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @endif
                                            <a href="{{ url('surat/detail/'.$cat->id_kelahiran) }}" class="btn btn-primary mb-2">  
                                                <i class="fa fa-list-alt"></i>
                                                Detail 
                                            </a>
                                          </td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- Surat Kematian --->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Kematian</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Jenazah</th>
                                            <th>Nama Ibu</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Saksi 1</th>
                                            <th>Nama Saksi 2</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php
                                     $b = 0;
                                    ?>
                                    @foreach ($data_meninggal as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{ ++$b }}</td>
                                          <td>{{$cat->nama_jenazah}}</td>
                                          <td>{{$cat->nama_ibu}}</td>
                                          <td>{{$cat->nama_ayah}}</td>
                                          <td>{{$cat->nama_saksi1}}</td>
                                          <td>{{$cat->nama_saksi2}}</td>
                                          <td> 
                                                @if ($cat->status == 1)
                                                    Diterima            
                                                @elseif($cat->status == 2)
                                                    Pending
                                                @elseif($cat->status == 3)
                                                    Ralat
                                                @endif
                                            <form method="post" class="user" action="{{ url('surat/edit-pd-kmt/' . $cat->id_kematian) }}" enctype="multipart/form-data">
                                            @csrf            
                                                <select name="status" class="select form-control form-control">
                                                    @if ($cat->status == 1)
                                                    <option value="2">Pending</option>
                                                    <option value="3">Ralat</option>
                                                    @elseif($cat->status == 2)
                                                    <option value="1">Diterima</option>
                                                    <option value="3">Ralat</option>
                                                    @elseif($cat->status == 3)
                                                    <option value="1">Diterima</option>
                                                    <option value="2">Pending</option>
                                                    @endif         
                                                </select>
                                                <button type="submit" class="btn btn-success btn-user btn-block" value="Edit Data">
                                                Edit
                                                </button>

                                            </form>
                                          </td>
                                          <td>
                                            @if ($cat->status == 1)
                                                <a href="{{ url('surat/download/'.$cat->id_kematian) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @endif
                                            <a href="{{ url('surat/detail-kmt/'.$cat->id_kematian) }}" class="btn btn-primary mb-2">  
                                                <i class="fa fa-list-alt"></i>
                                                Detail 
                                            </a>
                                          </td>
                                      </tr>
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                    
                    <!-- Surat Keterangan --->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Pemohon</th>
                                            <th>Keperluan</th>
                                            <th>Berlaku Sampai</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data_ket as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{$cat->nama_pemohon}}</td>
                                          <td>{{$cat->keperluan}}</td>
                                          <td>{{$cat->berlaku_sampai}}</td>
                                          <td> 
                                                @if ($cat->status == 1)
                                                    Diterima            
                                                @elseif($cat->status == 2)
                                                    Pending
                                                @elseif($cat->status == 3)
                                                    Ralat
                                                @endif
                                            <form method="post" class="user" action="{{ url('surat/edit-pd-ket/' . $cat->id_keterangan) }}" enctype="multipart/form-data">
                                            @csrf            
                                                <select name="status" class="select form-control form-control">
                                                    @if ($cat->status == 1)
                                                    <option value="2">Pending</option>
                                                    <option value="3">Ralat</option>
                                                    @elseif($cat->status == 2)
                                                    <option value="1">Diterima</option>
                                                    <option value="3">Ralat</option>
                                                    @elseif($cat->status == 3)
                                                    <option value="1">Diterima</option>
                                                    <option value="2">Pending</option>
                                                    @endif         
                                                </select>
                                                <button type="submit" class="btn btn-success btn-user btn-block" value="Edit Data">
                                                Edit
                                                </button>

                                            </form>
                                          </td>
                                          <td>
                                            @if ($cat->status == 1)
                                                <a href="{{ url('surat/download/'.$cat->id_keterangan) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @endif
                                            <a href="{{ url('surat/detail-ket/'.$cat->id_keterangan) }}" class="btn btn-primary mb-2">  
                                                <i class="fa fa-list-alt"></i>
                                                Detail 
                                            </a>
                                          </td>
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