<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;
    protected $table = 'petani';
    protected $fillable = [
        'user_id',
        'username',
        'nama_petani',
        'alamat',
        'no_telp',
        'photo'
    ];

    public function garapan()
    {
        return $this->hasMany(\App\Models\Garapan::class);
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }
}
