<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class tb_bank extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'nama_bank'
    ];
}
