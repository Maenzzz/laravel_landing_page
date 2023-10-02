<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\barang;
class produk_ctr extends Controller
{
    //
    public function index()
{
    $barang = barang::all();
    return view('landing', compact('barang'));
}
public function index2()
{
    $barang = barang::all();
    return view('beli', compact('barang'));
}


public function productDetails($kode)
{
    // Fetch the product details based on the kode parameter
    $product = barang::where('kode', $kode)->first();

    // Pass the product details to the beli.blade.php view
    return view('beli', compact('product'));
}
}
