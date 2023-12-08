<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Vamos a poner los campos que vamos a llenar
    protected $fillable = ['description'];

    //Vamos a crear una función para establecer la relación

    public function products(){
        //Función tiene muchos
        return $this->hasMany(Product::class, 'id');
    }


}
