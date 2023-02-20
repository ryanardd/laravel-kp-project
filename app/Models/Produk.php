<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // gak boleh diisi, sisannya boleh

    
    public function category()
    {
        // 1 produk memiliki 1 category (one to one)
        return $this->belongsTo(Category::class);
    }
}
