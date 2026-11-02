<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function beranda()
    {
        $products = Barang::where('status', 'tersedia')
            ->latest()
            ->take(4)
            ->get();

        return view('index', compact('products'));
    }

    public function katalog()
    {
        $products = Barang::all();
        return view('katalog', compact('products'));
    }

    public function detail($id)
    {
        $product = Barang::findOrFail($id);

        return view('detailbarang', compact('product'));
    }
}
