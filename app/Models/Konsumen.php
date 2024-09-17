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
        'user_id',
        'nama_konsumen',
        'email',
        'password',
        'no_hp',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id_konsumen');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }
}
