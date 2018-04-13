<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SuperAdmin extends Authenticatable
{
    use Notifiable;
    protected $table = "superadmin";
    protected $fillable = [
        'name', 'email'
    ];

    protected $hidden = ['password'];
}
