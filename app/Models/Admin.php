<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['username_admin', 'password_admin', 'nama_admin', 'noHP_admin', 'role_id'];
}
