<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // protected $guarded = ['id']; // gak boleh diisi, sisannya boleh
    protected $fillable = [
        'image', 'product_id'
    ];

    public function products()
    {
        // 1 produk memiliki 1 product (one to one)
        return $this->belongsTo(Produk::class);
    }
}
