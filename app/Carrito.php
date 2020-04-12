<?php

namespace App;

class Carrito
{
    public $nombreProducto;
    public $cantidadProducto;
    public $precioProducto;
    public $img_producto;

    public function __construct($nombreProducto,$cantidadProducto,$precioProducto,$imagen)
    {
      $this->nombre_producto = $nombreProducto;

      $this->cantidad_producto = $cantidadProducto;
      $this->precio_producto = $precioProducto;
      $this->img_producto = $imagen;
    }
}
