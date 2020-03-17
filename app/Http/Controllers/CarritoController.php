<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Comprobante;
use App\Categoria;
use App\Producto;
use App\User;
use App\Http\Requests\ValidacionCantidadCompra;


class CarritoController extends Controller
{

    public function SumandoAlCarrito(ValidacionCantidadCompra $request){

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
            $precioTotal = $precioTotal + ($producto->precio_producto*$producto->cantidad_producto);
           }


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

    public function GenerarComprobante(){

        $categorias = Categoria::all();

        $now = new \DateTime();


        $usuario_email =  auth()->user()->email;

        $user = User::where('email','=', $usuario_email)->get();
        $id = $user[0]->id;
        $compro = new Comprobante();
        $numero =$compro->obtenerUltimoNumero();
        $numero = $numero + 1;
        $codigo = $compro->GenerarCodigoPago($id);
        session_start();

        $ArrayProductos=[];


                foreach($_SESSION as $productoCarrito){

                   $carritoMostrar = new Carrito($productoCarrito->nombre_producto,$productoCarrito->cantidad_producto,$productoCarrito->precio_producto,$productoCarrito->img_producto);
                   $ArrayProductos[] =$carritoMostrar;

               }
               $precioTotal = 0;

               foreach($ArrayProductos as $producto){
                   $precioTotal = $precioTotal + ($producto->precio_producto*$producto->cantidad_producto);
               }
               foreach($ArrayProductos as $producto1){
                $comprobante = new Comprobante();
                $comprobante->user_id =$id;
                $comprobante->nombre_producto =$producto1->nombre_producto;
                $comprobante->fecha_compra =$now->format('Y-m-d H:i:s');
                $comprobante->numero_comprobante =$numero;
                $comprobante->total_gastado =$precioTotal;
                $comprobante->save();

            }
        return view('/comprobante', compact('categorias','comprobante','ArrayProductos','codigo','precioTotal'));
    }

}

