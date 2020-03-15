<?php
namespace App\Http\Controllers;
use App\Http\Requests\ValidacionRegistroMarca;
use App\Marca;

class MarcaController extends Controller
{
    public function AltaMarca(ValidacionRegistroMarca $request){



        $marca = new Marca();

        $marca->nombre_marca = $request['nombre_marca'];

        $marca->save();

        $valor = "marca";

        return view('/panel',compact('valor'));

    }
}
