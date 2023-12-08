@extends('layouts.app_products')

@section('content')

@error('nama_produks')
    <div class="mt-10 shadow-lg rounded-lg w-80 p-3 bg-slate-100 ml-4">
            <p class="text-red-500">{{ $message }}</p>
    </div>
@enderror
@error('harga_produks')
    <div class="mt-10 shadow-lg rounded-lg w-80 p-3 bg-slate-100 ml-4">
            <p class="text-red-500">{{ $message }}</p>
    </div>
@enderror
@error('stok_produks')
    <div class="mt-10 shadow-lg rounded-lg w-80 p-3 bg-slate-100 ml-4">
            <p class="text-red-500">{{ $message }}</p>
    </div>
@enderror
@error('foto_produks')
    <div class="mt-10 shadow-lg rounded-lg w-80 p-3 bg-slate-100 ml-4">
            <p class="text-red-500">{{ $message }}</p>
    </div>
@enderror
       
    <div class="mt-10 w-full mx-auto ">
        <form action="{{ route('store') }}" method="POST" class=" w-10/12 mx-auto">
            @csrf
           <div class="flex flex-col w-1/2 mx-auto shadow-lg rounded-lg p-5 bg-slate-200">
            <div>
                <label for="nama_produks" class="w-36 float-left block mr-14">Nama Produk : </label>
                <input 
                        type="text" 
                        name="nama_produks" 
                        id="nama_produks" 
                        placeholder="Masukan Nama Produk"
                        class="rounded-lg w-72"
                        value="{{old('nama_produks')}}"
                    >
                </div>
              
            <div class="my-2">
                <label for="harga_produks"  class="w-36  float-left block mr-14">Harga Produks: </label>
                <input 
                        type="text" 
                        name="harga_produks" 
                        id="harga_produks" 
                        placeholder="Masukan Harga Produk"
                        class="rounded-lg w-72"
                        value="{{old('harga_produks')}}"

                    >
            </div>
            <div class="">
                <label for="stok_produks"  class="w-36  float-left block mr-14">Stok Produk : </label>
                <input 
                    type="text" 
                    name="stok_produks" 
                    id="stok_produks" 
                    placeholder="Masukan Stok Produk"
                    class="rounded-lg w-72"
                    value="{{old('stok_produks')}}"

                >
            </div>
            <div class="my-2">
                <label for="foto_produks"  class="w-36  float-left block mr-14">Foto Produks : </label>
                <input 
                    type="text" 
                    name="foto_produks" 
                    id="foto_produks" 
                    placeholder="Masukan Foto Produk"
                    class="rounded-lg w-72"
                    value="{{old('foto_produks')}}"

                >
            </div>
           <div>
           <button class="btn btn-success" type="submit">Submit</button>
           </div>
           </div>
        </form>
    </div>

@endSection