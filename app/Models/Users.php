<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Users extends Model implements AuthenticatableContract
{
    use Authenticatable;

    // Add your table name and any other necessary configurations
    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function petani()
    {
        return $this->hasOne(Petani::class, 'user_id'); // Assuming user_id is the foreign key in petani
    }
}
