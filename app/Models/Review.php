<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillabel = [
        'nama_customer',
        'gambar',
        'tipe_customer',
        'deskripsi'
    ];
}
