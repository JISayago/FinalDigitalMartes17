<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Producto;

use Illuminate\Http\Request;

class CarritoController extends Controller
{

    public function SumandoAlCarrito(Request $request){

        $id = $request['producto_id'];

        $productocoll = Producto::where('producto_id','=',$id)->get();

        $producto = $productocoll[0];


        $variableCarrito = "carrito".$id;

        $variableCarrito = new Carrito($producto->nombre_producto,$request['cantidad_producto'],$producto->precio_producto,$producto->img_producto);

        $nomb = $id.trim($producto->nombre_producto);

        session_start();
        $_SESSION[$nomb] = $variableCarrito;


        $ArrayProductos = [];

        foreach($_SESSION as $productoCarrito){
             if(is_object($productoCarrito)){
            $carritoMostrar = new Carrito($productoCarrito->nombre_producto,$productoCarrito->cantidad_producto,$productoCarrito->precio_producto,$productoCarrito->img_producto);
            $ArrayProductos[] =$carritoMostrar;

        }

             elseif(isEmpty($ArrayProductos)){
                $carritoVacio = new Carrito(" "," "," "," ");
                 $ArrayProductos[] = $carritoVacio;
             }

        }
        $precioTotal = 0;

        foreach($ArrayProductos as $producto){
            $precioTotal = $precioTotal + ($producto->precio_producto*$producto->cantidad_producto);     }

        return view("/carrito", compact("ArrayProductos","precioTotal"));

    }

    public function CarritoDesdeInicio(){
        session_start();

$ArrayProductos=[];


        foreach($_SESSION as $productoCarrito){
            if(is_object($productoCarrito)){
           $carritoMostrar = new Carrito($productoCarrito->nombre_producto,$productoCarrito->cantidad_producto,$productoCarrito->precio_producto,$productoCarrito->img_producto);
           $ArrayProductos[] =$carritoMostrar;

       }

            elseif(isEmpty($ArrayProductos)){
               $carritoVacio = new Carrito(" "," "," ", " ");
                $ArrayProductos[] = $carritoVacio;
            }

       }
       $precioTotal = 0;

       foreach($ArrayProductos as $producto){
           $precioTotal = $precioTotal + ($producto->precio_producto*$producto->cantidad_producto);
       }






       return view("/carrito", compact("ArrayProductos","precioTotal"));


    }


}

