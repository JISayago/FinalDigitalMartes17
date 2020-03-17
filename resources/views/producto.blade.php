@extends('layouts.superior')

@section('centralPagina')
<div class="tarjetas-categoria">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img src="/storage/productos/{{$producto->img_producto}}"  width="35%" height="35%">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$producto->nombre_producto}}</h5>
                                                <p class="card-text">$ {{$producto->precio_producto}}</p>
                                                <p class="card-text3">{{$producto->detalle_producto}}</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            <br>

                            <form action="/carrito" method="POST">
                                @csrf
                            <input class="form-control form-control-lg w-25 mb-3  @error('cantidad_producto') is-invalid @enderror" type="text" name="cantidad_producto"  placeholder="Cantidad..">
                            @error('cantidad_producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input id="productoID" name="producto_id" type="hidden" value="{{$producto->producto_id}}">


                            <!--  boton para añadir al carrito -->
                            <div class="agregar_cancelar">

                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item w-50 p-3">
                                        <button class="btn nav-link active " type="submit" name="btnAñadirCarrito">Añadir al Carrito</button>
                                    </li>

                                    <li class="nav-item w-50 p-3">
                                        <a href="/" class="btn btn-danger">Cancelar Compra</a>
                                    </li>

                                    <li class="nav-item w-50 p-3">
                                        <a href="/" class="btn btn-success">Volver al Inicio</a>
                                    </li>

                                </div>


                          </form>
  </div>
  @endsection

