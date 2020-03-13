<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function AltaCategoria(Request $request){



        $categoria = new Categoria;

        $categoria->nombre_categoria = $request['nombre_categoria'];
        $categoria->discontinuada = 0;
        $categoria->save();



    }
}
