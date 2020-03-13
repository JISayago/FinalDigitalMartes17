<?php

namespace App;

class Carrito
{
    public $nombreProducto;
    public $cantidadProducto;
    public $precioProducto;

    public function __construct($nombreProducto,$cantidadProducto,$precioProducto)
    {
      $this->nombre_producto = $nombreProducto;
      $this->cantidad_producto = $cantidadProducto;
      $this->precio_producto = $precioProducto;
    }
}
