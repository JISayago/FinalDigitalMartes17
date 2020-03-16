<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function Mensaje($accion = " "){
        switch($accion){

            case "e": echo "<script>alert('El producto fue eliminado Correctamente')</script>";
        break;

        case "a": echo "<script>alert('El producto fue creado Correctamente')</script>";
        break;

        case "c": echo "<script>alert('la categirua fue creada Correctamente')</script>";
        break;

        case "m": echo "<script>alert('La marca fue creada Correctamente')</script>";
        break;
         default: echo "<script>alert('Panel de Administración'</script>";
        }

    }
}
