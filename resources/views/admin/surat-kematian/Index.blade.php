@extends('admin.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Permohonan Surat Kematian</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Surat Kematian</h6>
                        </div>

                        <div class="card-body">
                            <div class="my-2">
                                <a href="{{url('surat-kematian/add/create')}}" class="btn btn-success btn-icon-split">  
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
                                            <th>Nama Jenazah</th>
                                            <th>Nama Ibu</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Saksi 1</th>
                                            <th>Nama Saksi 2</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{$cat->nama_jenazah}}</td>
                                          <td>{{$cat->nama_ibu}}</td>
                                          <td>{{$cat->nama_ayah}}</td>
                                          <td>{{$cat->nama_saksi1}}</td>
                                          <td>{{$cat->nama_saksi2}}</td>
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
                                                <a href="{{ url('surat-kematian/file/'.$cat->id_kematian) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-download"></i>
                                                    Download    
                                                </a>
                                            @elseif ($cat->status == 3)
                                                <a href="{{ url('surat-kematian/edit/'.$cat->id_kematian) }}" class="btn btn-success mb-2">  
                                                    <i class="fa fa-edit"></i>
                                                    Edit    
                                                </a>
                                            @endif
                                            <a href="{{ url('surat-kematian/detail/'.$cat->id_kematian) }}" class="btn btn-primary mb-2">  
                                                <i class="fa fa-list-alt"></i>
                                                Detail 
                                            </a>`
                                            <a href="{{ url('surat-kematian/delete/'.$cat->id_kematian) }}" class="btn btn-danger mb-2">  
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