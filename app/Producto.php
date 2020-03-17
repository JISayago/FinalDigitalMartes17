<?php

namespace App;

use App\Categoria;
use App\Marca;



use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table ="productos";
    public $id ="producto_id";
    public $timestamps =false;


    public function categoria(){

        return $this->belongsTo(Categoria::class,'categoria_id');
    }


    public function users(){

        return $this->belongsToMany(User::class,'comprobantes','producto_id','id');
    }


    public function marca(){

        return $this->belongsTo(Marca::class,'marca_id');
    }




}
