@extends('layouts.superior')

@section('centralPagina')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="http://via.placeholder.com/400x90?text=logo">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Factura n°{{$comprobante->numero_comprobante}} </p>
                        <p class="text-muted">Fecha: {{$comprobante->fecha_compra}}</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4"> Information del Cliente</p>
                        <p class="mb-1">{{auth()->user()->name}}</p>
                            <p>{{auth()->user()->email}}</p>
                            <p class="mb-1">San Miguel de Tucuman, Tucuman</p>
                            <p class="mb-1">CP: T4000</p>
                        </div>


                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th class="border-0 text-uppercase small font-weight-bold">Producto</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Precio Unitario</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Cantidad</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Sub-Total</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ArrayProductos as $Productocarrito)

                                    <tr>
                                    <td>{{$Productocarrito->nombre_producto}}</td>
                                    <td>${{$Productocarrito->precio_producto}}</td>
                                    <td>{{$Productocarrito->cantidad_producto}}</td>
                                    <td>${{$Productocarrito->precio_producto * $Productocarrito->cantidad_producto}}</td>

                                    </tr>

                                    @endforeach
                                    <tr>
                                        <td>{{ " " }}</td>
                                        <td>{{ " " }}</td>
                                        <td>{{ " " }}</td>
                                        <td>{{ " " }}</td>

                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2"><h2>Total</h2></div>
                            <div class="h2 font-weight-light">${{$precioTotal}}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2"><h3>Codigo Pago:</h3></div>
                            <div class="h2 font-weight-light">{{$codigo}}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2"></div>
                        <div class="h2 font-weight-light"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="/" class="btn btn-success d-flex justify-content-center">Volver</a>

</div>

@endsection
