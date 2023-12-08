<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //$fillable es el nombre del arreglo para el query
    protected $fillable = ['description', 'price', 'stock', 'categories_id'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
