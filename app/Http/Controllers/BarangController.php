<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function katalog()
    {
        $products = Barang::all();
        return view('katalog', [
            'products' => $products
        ]);  

    }
}
