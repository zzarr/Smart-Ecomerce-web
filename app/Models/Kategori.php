<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Garapan;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
        'nama_kategori',
    ];

    public function garapan()
    {
        return  $this->hasMany(Garapan::class);
    }
}
