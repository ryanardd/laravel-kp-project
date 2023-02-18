<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillabel = [
        'nama_produk',
        'harga',
        'gambar_produk',
        'deskripsi',
        'is_active',
        // 'id_kategori',
        // 'id_review',
    ];
}
