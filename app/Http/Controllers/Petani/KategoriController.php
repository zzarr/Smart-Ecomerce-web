<?php

namespace App\Http\Controllers\Petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;

class KategoriController extends Controller
{
    public function index()
    {

        $webtitle = 'Kategori';
        $kategori = DB::table('kategori')->get();
        return view('Petani.dashboard.kategori', compact('webtitle', 'kategori'));
    }

    public function add()
    {
        $webtitle = 'Kategori';
        return view('Petani.dashboard.kategori_add', compact('webtitle'));
    }
}
