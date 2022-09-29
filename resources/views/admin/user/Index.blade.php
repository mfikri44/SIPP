@extends('admin.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengguna</h6>
                        </div>

                        <div class="card-body">
                            <div class="my-2">
                                <a href="{{('user-data/create')}}" class="btn btn-success btn-icon-split">  
                                    <span class="text">Tambah Pengguna</span>
                                </a>    
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama User</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $cat)
                                    <tbody>

                                      <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{$cat->name_user}}</td>
                                          <td>{{$cat->email}}</td>
                                          <td> @if ($cat->level == 1)
                                                    Kepala Desa
                                                @elseif($cat->level == 2)
                                                    Admin
                                                @elseif($cat->level == 3)
                                                    User
                                                @endif
                                          </td>
                                          <td>
                                            <a href="{{ url('user-data/edit/'.$cat->id) }}" class="btn btn-success mb-2">  
                                                <i class="fa fa-edit"></i>
                                                Edit 
                                            </a>
                                            <a href="{{ url('user-data/delete/'.$cat->id) }}" class="btn btn-danger mb-2">  
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