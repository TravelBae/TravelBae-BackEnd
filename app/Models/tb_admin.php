<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class tb_admin extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'username_admin',
        'password_admin',
        'nama_admin',
        'noHP_admin',
        'role_id'
    ];
}
