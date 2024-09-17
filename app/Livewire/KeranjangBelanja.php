<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;

class KeranjangBelanja extends Component
{
    public $cartItems = []; // Menyimpan item di keranjang
    public $total = 0; // Menyimpan total harga

    // Load item keranjang ketika komponen di-mount
    public function mount()
    {
        $this->cartItems = Cart::where('konsumen_id',  auth()->user()->konsumen->id)->get();
        $this->updateTotal();
    }

    // Menghitung total harga
    public function updateTotal()
    {
        $this->total = $this->cartItems->sum(function ($item) {
            return $item->quantity * $item->harga_per_item;
        });
    }

    // Fungsi untuk memperbarui jumlah barang
    public function updateQuantity($cartItemId, $quantity)
    {
        $cartItem = Cart::find($cartItemId);
        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
            $this->cartItems = Cart::where('konsumen_id',  auth()->user()->konsumen->id)->get();
            $this->updateTotal();
        }
    }

    public function render()
    {
        return view('livewire.keranjang');
    }
}

