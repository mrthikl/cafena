<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'user_name',
        'user_password',
        'user_email',
        'user_phone',
        'user_address',
        'is_admin',
    ];

    protected $hidden = [
        'user_password', 'remember_token',
    ];
}
