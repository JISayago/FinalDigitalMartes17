@extends('layouts.carritolayout')

@section('contenido')
<br>
<br>
                        <div class="row">
                            <div class="col">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Precio Unitario</th>
                                            <th>Cantidad</th>
                                            <th>Sub-Total</th>
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


                                            <tr class="table-warning">
                                                <th>Total</th>
                                                <th></th>
                                                <th></th>
                                                <th>${{$precioTotal}} </th>
                                            </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">

                                <form action="/comprobante" method="POST">
                                @csrf
                                <button class="btn btn-primary active " type="submit" name="btnAñadirCarrito">Confirmar Compra</button>
                                <a href="/{categoria}" id="Reset" class="btn btn-danger">Resetear Carrito</a>
                                <a href="/" class="btn btn-success">Agregar Productos</a>
                            </form>
                            </div>
                            </div>
                        </div>


 @endsection
        </body>
 </html>
