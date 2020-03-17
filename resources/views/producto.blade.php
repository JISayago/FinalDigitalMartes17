@extends('layouts.superior')

@section('centralPagina')


<div class="row justify-content-center ">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center font-weight-bolder">{{ __('Producto') }}</div>

            <div class="card-body">
                <form action="/carrito" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="marca" class="col-md-3 col-form-label text-md-right"><h3>{{ __('') }}</h3></label>

                        <div class="col-md-6">

                            <div class="card _contenidoTarjeta">
                                <img src="/storage/productos/{{$producto->img_producto}}"  width="200px" height="200px">
                                <div class="card-body  w-100 text-center">
                                    <h5 class="card-title">{{$producto->nombre_producto}}</h5>
                                    <p class="card-text">$ {{$producto->precio_producto}}</p>
                                    <p class="card-text3">{{$producto->detalle_producto}}</p>
                                </div>
                            </div>

                            <input class="form-control form-control-lg mt-1w-100 mb-3  @error('cantidad_producto') is-invalid @enderror" type="text" name="cantidad_producto"  placeholder="Cantidad..">
                            @error('cantidad_producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input id="productoID" name="producto_id" type="hidden" value="{{$producto->producto_id}}">
                            <br>
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3 ">
                        <button class="btn btn-primary  " type="submit" name="btnAñadirCarrito">Añadir al Carrito</button>
                        <a href="/" class="btn btn-danger">Cancelar Compra</a>
                        <a href="/" class="btn btn-success">Volver</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection

