<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Garapan;

class HomeController extends Controller
{
    public function index()
    {
        $garapan = Garapan::all();
        return view('home', compact('garapan'));
    }

    public function produk()
    {
        return view('produk');
    }

    public function detail_produk($id)
    {
        $garapan = Garapan::find($id);
        return view('detail-produk', compact('garapan'));
    }
}
