<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $table ="marcas";
    public $id ="marca_id";
    public $timestamps =false;

    public function marca(){

        return $this->hasMany(Producto::class,'producto_id');
    }

}
