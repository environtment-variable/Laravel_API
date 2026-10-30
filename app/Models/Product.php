<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Mengizinkan field ini diisi saat input data baru
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}
