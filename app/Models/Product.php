<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','price', 'sale_percent','image', 'old_price', 'description', 
    ];
}
