<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'tb_customers';
    protected $fillable = [
        'nama_customer',
        'username_customer',
        'password_customer',
        'noHP_customer',
        'email',
        'role_id'
    ];
}
