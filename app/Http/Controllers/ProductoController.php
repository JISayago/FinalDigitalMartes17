<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;
use App\Http\Requests\ValidacionRegistroProducto;



class ProductoController extends Controller
{
    //----------------------------HOME CONTROLLERS---------------------------------//

    public function ListadoProductosCategorias(){

        $productos = Producto::all();

        $categorias = Categoria::all();


        return view('/inicio',compact('categorias','productos'));

    }



    public function ListadoProductosBuscador(ValidacionRegistroProducto $request){

        $buscador =  $request->get('buscador');

        $categorias = Categoria::all();

        $productos = Producto::where('nombre_producto','LIKE','%'.$buscador.'%')
        ->get();

        return view('/inicio',compact('productos','categorias'));
    }

    public function ListadoProductosPorCategoria($id){

         $bandera = false;

        $categorias = Categoria::all();

        foreach($categorias as $categoria){

            if($categoria->nombre_categoria == $id){

                $categoriaSeleccionada = $categoria->nombre_categoria;
                $bandera = true;

            }
        }
        if($bandera){

        $categoriaBD = Categoria::where('nombre_categoria','=', $categoriaSeleccionada)
        ->get();

        $categoriaId = $categoriaBD[0]->categoria_id;

        $productos = Producto::where('categoria_id','=', $categoriaId)->get();



        return view('/inicio',compact('productos','categorias'));
        }
        else{
            session_start();
            session_destroy();

            $productos = Producto::all();

            $categorias = Categoria::all();


            return view('/inicio',compact('categorias','productos'));
        }


    }


    //----------------------------ALTA CONTROLLERS---------------------------------//

    public function ListadoProductosVariaciones(){



        $categorias = Categoria::all();

        $marcas = Marca::all();

        return view('/altaProducto',compact('marcas','categorias'));

    }

    public function AltaProducto(ValidacionRegistroProducto $request){

        $ruta = $request->file('img_producto')->store('public/productos');
        $nombreArchivo = basename($ruta);



        $categorias = Categoria::all();

        $marcas = Marca::all();

        $producto = new Producto();

        $producto->nombre_producto = $request['nombre_producto'];
        $producto->detalle_producto = $request['detalle_producto'];
        $producto->codigo_producto = $request['codigo_producto'];
        $precioString =$request['precio_producto'];
        $producto->precio_producto = (float)$precioString;
        $producto->img_producto = $nombreArchivo;
        $producto->sin_stock = 0;
        $producto->stock = $request['stock'];
        $producto->marca_id = $request['marcas'];
        $producto->categoria_id = $request['categorias'];

        $producto->save();
        $valor = "p";

        return view('/panel',compact('valor'));


    }

    public function ProductoParaCarrito($id){

        $categorias = Categoria::all();

        $productocoll = Producto::where('producto_id','=',$id)->get();
        $producto = $productocoll[0];




        return view('producto', compact('producto','categorias'));


    }

    public function ProductoBajaModificar($id){

          $categorias = Categoria::all();

        $marcas = Marca::all();

        $productocoll = Producto::where('producto_id','=',$id)->get();
        $producto = $productocoll[0];

        $productoBM = new Producto();
        $productoBM->producto_id = $id;

        $productoBM->nombre_producto = $producto['nombre_producto'];
        $productoBM->detalle_producto = $producto['detalle_producto'];
        $productoBM->codigo_producto = $producto['codigo_producto'];
        $productoBM->precio_producto =  $producto['precio_producto'];
        $productoBM->img_producto = $producto['img_producto'];
        $productoBM->sin_stock = 0;
        $productoBM->stock = $producto['stock'];
        $productoBM->marca_id = $producto['marcas'];
        $productoBM->categoria_id = $producto['categorias'];




        return view('productobm', compact('productoBM','marcas','categorias'));


    }

    public function ListadoProductosCategoriasModificarEliminar(){

        $productos = Producto::all();

        $categorias = Categoria::all();


        return view('/bajamodificacion',compact('categorias','productos'));

    }

    public function EliminarProducto($id){

        Producto::where('producto_id','=',$id)->delete();
        $accion = "e";

        return redirect()->route('panel',["e"]);


    }


}
