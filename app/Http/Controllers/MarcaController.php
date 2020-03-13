<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{
    public function AltaMarca(Request $request){



        $marca = new Marca();

        $marca->nombre_marca = $request['nombre_marca'];

        $marca->save();



    }
}
