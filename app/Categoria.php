<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    public $table ="categorias";
    public $id ="categoria_id";
    public $timestamps =false;

    public function marca(){

        return $this->hasMany(Producto::class,'producto_id');
    }
}
