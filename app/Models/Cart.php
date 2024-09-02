<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Konsumen;
use App\Models\Garapan;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'id_konsumen',
        'id_garapan',
        'quantity',
        'created_at',
        'updated_at',
    ];

    public function konsumen()
    {
        return $this->belongsTo(Konsumen::class, 'id_konsumen');
    }

    public function garapan()
    {
        return $this->belongsTo(Garapan::class, 'id_garapan');
    }
}
