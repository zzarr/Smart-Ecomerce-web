<?php

namespace App\Http\Controllers\Petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $webtitle = 'Pesanan';
        return view('Petani.dashboard.pesanan', compact('webtitle'));
    }
}
