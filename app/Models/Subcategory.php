<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //especificamos los campos que queremos evitar si no esta ninguna significa que obtiene todos los campos
    //de nuestra tabla
    protected $guarded = [];

    //relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
