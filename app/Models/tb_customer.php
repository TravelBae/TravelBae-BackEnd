<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class tb_customer extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table = 'tb_customers';
    protected $fillable = [
        'username',
        'password',
        'noHP',
        'email',
        'role_id'
    ];
}
