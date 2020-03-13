@extends('layouts.abmProducto')

@section('nombre_producto')
{{$productoBM->nombre_producto}}
@endsection
@section('precio_producto')
{{$productoBM->precio_producto}}
@endsection
@section('codigo_producto')
{{$productoBM->codigo_producto}}
@endsection
@section('stock')
{{$productoBM->stock}}
@endsection
@section('detalle_producto')
{{$productoBM->detalle_producto}}
@endsection
@section('botones')
<button class="btn btn-primary" type="submit" name="btnModificar">Modificar</button>

                        <a href="/" class="btn btn-success">Cancelar</a>

<a href="/eliminarProducto/{{$productoBM->producto_id}}" class="btn btn-danger">Eliminar</a>

@endsection
