<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index() {
        $products = Product::all();
        return view('pages.dashboard', ['data' => $products]);
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $validate = $request->validate(
            [
                'nama_produks' => 'required|min:5',
                'harga_produks' => 'required|integer',
                'stok_produks' => 'required|integer',
                'foto_produks' => 'required'
            ]
        );

        Product::create($validate);
        return redirect('/products');
    }

    public function edit($product) {
        $produk = Product::findOrFail($product);
        return view('pages.edit', ['produk' => $produk]);
    }

    public function update(Request $request, $product) {
        $produk = Product::findOrFail($product);

        $validate = $request->validate(
            [
                'nama_produks' => 'required|min:5',
                'harga_produks' => 'required|integer',
                'stok_produks' => 'required|integer',
                'foto_produks' => 'required'
            ]
        );

        Product::where('id', $product)->update($validate);
        return redirect('/products');
    }

    public function destroy($product) {
        
        Product::where('id', $product)->delete();
        return redirect('/products');
    }

    public function show($product) {
        $data = Product::findOrFail($product);
        return view('pages.show', ['data' => $data]);
    }
}
