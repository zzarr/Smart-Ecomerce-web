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
        'username', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
