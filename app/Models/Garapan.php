<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Petani;
use App\Models\Kategori;
use App\Models\Cart;

class Garapan extends Model
{
    use HasFactory;
    protected $table = 'garapan';
    protected $fillable = [
        'petani_id',
        'nama_tanaman',
        'deskripsi',
        'harga_per_unit',
        'tanggal_tanam',
        'tanggal_panen',
        'status',
        'kategori_id',
        'photo'
    ];

    public function petani()
    {
        return $this->belongsTo(\App\Models\Petani::class);
    }

    public function kategori()
    {
        return $this->belongsTo(\App\Models\Kategori::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id_garapan');
    }
}
