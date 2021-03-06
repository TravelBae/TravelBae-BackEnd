<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'tb_events';
    protected $fillable = [
        'nama_event',
        'kategori',
        'tipe',
        'regulasi',
        'stok',
        'harga',
        'jam_mulai',
        'alamat',
        'img_tempat'
    ];
}
