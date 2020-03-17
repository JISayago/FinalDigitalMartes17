<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    public $table ="comprobantes";
    public $id ="comprobante_id";

    public $timestamps =false;


    public function obtenerUltimoNumero(){
        $comprobante = Comprobante::all()->last();

        if(is_object($comprobante)){
            $ultimo = $comprobante->numero_comprobante;
        }
        else{
           $ultimo = 0;
        }

        return $ultimo;
    }

    public function GenerarCodigoPago($id){
        $numeroRandom = mt_rand() . "/" .$id;

        return $numeroRandom;
    }

}
