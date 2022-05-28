<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'tb_customers';
    protected $fillable = [
        'nama',
        'username',
        'password',
        'noHP',
        'email',
        'role_id'
    ];
}
