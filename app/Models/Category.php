<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillabel = [
        'nama_category',
        'slug'
    ];

    public function product()
    {
        // 1 category memiliki banyak produk (one to many)
        return $this->hasMany(Produk::class);
    }
}
