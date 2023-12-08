@extends('layouts.app_products')
@section('title', 'Dashboard')


@section('content')

   <div class="max-w-6xl shadow-lg mx-auto my-10">
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Stok Produk</th>
                    <th>Foto Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $produk)
                    <tr>
                        <td class="text-blue-500"><a href="{{route('product.show', ['id' => $produk->id])}}">{{$produk["nama_produks"]}}</a></td>
                        <td>{{$produk["harga_produks"]}}</td>
                        <td>{{$produk["stok_produks"]}}</td>
                        <td><img src="{{$produk['foto_produks']}}" class="w-28" ></td>
                        <td>
                            <a class="btn btn-info" href="{{route('edit', ['id' => $produk->id])}}">Edit</a>

                            
                            <form method="post" action="{{route('delete', ['id' => $produk->id])}}" class="inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-error"  >Hapus</a>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>

@endsection