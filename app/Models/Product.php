<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //especificamos los campos que queremos evitar si no esta ninguna significa que obtiene todos los campos
    //de nuestra tabla
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion uno a muchos
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //relacion uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //relacion uno a muchos inversa
    public function subCategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //relacion muchos a muchos
    public function colors(){
        return $this->hasMany(Color::class);
    }
}
