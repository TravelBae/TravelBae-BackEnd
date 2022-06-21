<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_customer',
        'id_tempat',
        'id_event',
        'id_bank',
        'nama_customer',
        'order_status',
        'tanggal_beli',
        'total_bayar',
        'total_tiket'
    ];
    public $timestamps = false;
}
