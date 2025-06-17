<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public $timestamps = true;
    protected $fillable = [
        'name', 'description', 'price', 'stock'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];
}
