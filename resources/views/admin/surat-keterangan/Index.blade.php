@extends('admin.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Permohonan Surat Keterangan</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan</h6>
                        </div>

                        <div class="card-body">
                            <div class="my-2">
                                <a href="{{url('surat-keterangan/add/create')}}" class="btn btn-success btn-icon-split">  
                                    <span class="text">Ajukan permohanan Data</span>
                                </a>    
                            </div>
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
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{$cat->nama_pemohon}}</td>
                                          <td>{{$cat->keperluan}}</td>
                                          <td>{{$cat->berlaku_sampai}}</td>
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
                                                <a href="{{ url('surat-keterangan/file/'.$cat->id_keterangan) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @elseif ($cat->status == 3)
                                                <a href="{{ url('surat-keterangan/edit/'.$cat->id_keterangan) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-edit"></i>
                                                    Edit    
                                                </a>
                                            @endif
                                            <a href="{{ url('surat-keterangan/detail/'.$cat->id_keterangan) }}" class="btn btn-primary mb-2">  
                                                <i class="fa fa-list-alt"></i>
                                                Detail 
                                            </a>`
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

                </div>
                <!-- /.container-fluid -->

@endsection