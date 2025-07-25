<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    //
    protected $fillable = [
        'name',
        'username',
        'password',
        'role',
        'kode_lanud',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
