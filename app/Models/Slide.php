<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    // protected $guarded = ['id']; // gak boleh diisi, sisannya boleh
    protected $guarded = ['id'];
}
