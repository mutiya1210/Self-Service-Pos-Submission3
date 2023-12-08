@extends('layouts.app_products')

@section('content')


<div class="w-1/2 mx-auto bg-slate-200 rounded-lg shadow-lg my-14 p-2">
    <h1 class="text-2xl">Nama Produk : {{$data->nama_produks}}</h1>
    <h1 class="text-2xl">Harga Produk : {{$data->harga_produks}}</h1>
    <h1 class="text-2xl">Harga Produk : {{$data->stok_produks}}</h1>
   <img src="{{$data->foto_produks}}" alt="{{$data->nama_produks}}">
</div>


@endsection