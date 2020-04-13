@extends('layouts.superior')

@section('centralPagina')


<div class="tarjetas-categoria _Tarjetas">

    <div class="row">
        @foreach($productos as $producto)
        <div class="col-sm-4">
            <div class="card _contenidoTarjeta mt-4">
                <img src="/storage/productos/{{$producto->img_producto}}"  class = "m-3" width="200px" height="200px">
                <div class="card-body  w-100 text-center">
                    <h5 class="card-title">{{$producto->nombre_producto}}</h5>
                    <p class="card-text">$ {{$producto->precio_producto}}</p>
                    <a href="/productobm/{{$producto->producto_id}}" class="btn btn-danger">Baja/Modificacion</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
