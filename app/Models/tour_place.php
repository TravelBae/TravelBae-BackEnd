<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_place extends Model
{
    use HasFactory;
    protected $table = 'tb_tour_places';
    protected $fillable = [
        'nama_tempat',
        'tipe',
        'deskripsi',
        'stok_tiket',
        'harga',
        'jam_buka',
        'alamat',
        'img_tempat',
    ];
}
