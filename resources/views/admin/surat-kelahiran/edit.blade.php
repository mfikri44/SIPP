@extends('admin.app')

@section('header')
    <div class="w-1/2">
        <a class="text-blueGray-400 text-sm capitalize hidden lg:inline-block font-semibold" href="{{ url('category') }}">              
            Kategori</a>
        <a class="text-blueGray-400 text-sm capitalize hidden lg:inline-block font-semibold" href="">              
            /</a>   
        <a class="text-blueGray-600 text-sm capitalize hidden lg:inline-block font-semibold" href="">              
            Edit Kategori</a>
        
    </div>
@endsection
@section('content')

    <div class="relative w-full bg-gray-100 md:pt-4 pb-32 pt-8 scroll-smooth hover:scroll-auto ">
          <div class="px-4 md:px-10 mx-auto w-full">
              <div class="flex flex-wrap mt-4">
                <div class="w-full px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full shadow-lg rounded"
                  >
                    <div class="rounded-t px-4 py-3 bg-gray-400 border-0">
                      <div class="flex flex-wrap items-center">
                        <div
                          class="relative w-full px-4 max-w-full flex-grow flex-1"
                        >
                        
                          <h3 class="font-semibold text-white text-2xl">
                            Edit Kategori
                          </h3>
                        </div>
                        
                      </div>
                    </div>
                    <div class="overflow-x-auto">
                        <form class="bg-white"action="{{ url('category/edit/' . $data->id) }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="mb-2 pt-2 px-4">
                                <span class="text-sm font-semibold inline-block py-2 capitalize rounded-full text-blueGray-700">
                                    Nama
                                </span>
                                <div class="pt-2">
                                    <input type="text" name="name_category" value="{{ $data->name_category }}" placeholder="Nama Kategori" class="px-2 py-3 placeholder-slate-300 text-slate-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-1/2"/>
                                </div>
                            </div> 
                            
                            <div class="mb-2 px-4 pt-2">
                                <button type="submit" name="submit" class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                                    >
                                Edit Data
                                </button>
                                <a href="{{ url('category') }}" class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                                    >
                                Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

@endsection