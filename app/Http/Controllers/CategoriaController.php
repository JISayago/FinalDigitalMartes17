<?php

namespace App\Http\Controllers;


use App\Http\Requests\ValidacionRegistros;

use App\Categoria;

class CategoriaController extends Controller
{
    public function AltaCategoria(ValidacionRegistros $request){



        $categoria = new Categoria;

        $categoria->nombre_categoria = $request['nombre_categoria'];
        $categoria->discontinuada = 0;
        $categoria->save();



    }
}
