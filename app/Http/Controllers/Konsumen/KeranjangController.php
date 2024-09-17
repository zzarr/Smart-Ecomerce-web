<?php

namespace App\Http\Controllers\Konsumen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class KeranjangController extends Controller
{
    public function index()
    {
        $cart = Cart::with(['konsumen', 'garapan'])->where('id_konsumen', auth()->user()->konsumen->id)->get();
        return view('keranjang', compact('cart'));
    }

    public function store(Request $request)
    {
        $qty = 1;
        if ($request->qty) {
            $qty  = $request->qty;
        }
        $cart = Cart::create([
            'id_konsumen' => auth()->user()->konsumen->id,
            'id_garapan' => $request->id_garapan,
            'quantity' => $qty,
        ]);

        return to_route('keranjang');
    }
}
