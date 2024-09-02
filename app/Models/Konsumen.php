<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Konsumen extends Model
{
    use HasFactory;
    protected $table = 'konsumen';
    protected $fillable = [
        'id_konsumen',
        'nama_konsumen',
        'email',
        'password',
        'no_hp',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id_konsumen');
    }
}
