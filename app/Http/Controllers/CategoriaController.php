<?php

namespace App\Http\Controllers;


use App\Http\Requests\ValidacionRegistroCategoria;

use App\Categoria;

class CategoriaController extends Controller
{
    public function AltaCategoria(ValidacionRegistroCategoria $request){



        $categoria = new Categoria;

        $categoria->nombre_categoria = $request['nombre_categoria'];
        $categoria->discontinuada = 0;
        $categoria->save();
        $valor = "c";

        return view('/panel',compact('valor'));

    }
}
