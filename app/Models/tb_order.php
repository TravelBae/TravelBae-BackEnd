<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_customer',
        'order_status',
        'tanggal_beli',
        'total_bayar'
    ];
}
