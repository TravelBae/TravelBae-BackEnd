<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class tb_customers extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'username',
        'password',
        'noHP',
        'email',
        'role_id'
    ];
}
