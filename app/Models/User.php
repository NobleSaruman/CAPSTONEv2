<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'user_name', 'email', 'password', 'active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
