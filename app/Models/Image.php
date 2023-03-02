<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // gak boleh diisi, sisannya boleh

    public function product()
    {
        // 1 produk memiliki 1 product (one to one)
        return $this->belongsTo(Produk::class);
    }
}
