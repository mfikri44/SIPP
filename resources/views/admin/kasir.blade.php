@extends('admin.app')

@section('header')
    <div class="w-1/2">
        <a class="text-blueGray-700 text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">              
        Kasir</a>
    </div>
@endsection
@section('content')

    <div class="relative w-full h-screen overflow-y-hidden bg-gray-100 md:pt-2 pb-32 scroll-smooth hover:scroll-auto ">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
               <img src="{{ url('/assets/image/beranda.png') }}" class="py-2 align-items-center object-center hover:text-gray-300 flex items-center justify-center">
            </div>
          </div>
        </div>

@endsection