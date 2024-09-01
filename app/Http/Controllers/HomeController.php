<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Garapan;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        $garapan = Garapan::all();
        return view('home', compact('garapan'));
    }

    public function produk()
    {
        $garapan = Garapan::all();
        $kategori = Kategori::all();
        return view('produk', compact('garapan', 'kategori'));
    }

    public function detail_produk($id)
    {
        $garapan = Garapan::find($id);
        return view('detail-produk', compact('garapan'));
    }
}
