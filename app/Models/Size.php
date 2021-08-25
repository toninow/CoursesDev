<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa
    public function product(){
        $this->belongsTo(Product::class);
    }

    //relacion muchos a muchos
    public function colors(){
        $this->belongsToMany(Color::class);
    }
}
