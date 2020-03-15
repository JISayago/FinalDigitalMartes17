<?php
namespace App\Http\Controllers;
use App\Http\Requests\ValidacionRegistros;
use App\Marca;

class MarcaController extends Controller
{
    public function AltaMarca(ValidacionRegistros $request){



        $marca = new Marca();

        $marca->nombre_marca = $request['nombre_marca'];

        $marca->save();



    }
}
