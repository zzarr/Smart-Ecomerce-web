<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    }

    public function produk()
    {
        return view('produk');
    }

    public function detail_produk()
    {
        return view('detail-produk');
    }
}
