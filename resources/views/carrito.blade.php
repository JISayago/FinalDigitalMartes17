<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">

        <!-- barra de navegacion busqueda-->
        <div class="buscar">
            <nav class="navbar navbar-dark bg-primary">
                <!-- barra de navegacion 1  -->
                <!-- lista de categoria -->
                <!-- lista nosotros  -->
                <!-- carrito  -->

                <div class="barra-navegacion">
                    <ul class="nav nav-pills">
                        <a class="navbar-brand" href="/">Proyecto Final</a><br>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Información</a>
                                        <div class="dropdown-menu">
                                            <ul class="lista-categoria">

                                                <li class="lista-categoria-item">
                                                    <a href="#">Recomendaciones</a>
                                                </li>

                                                <li class="lista-categoria-item">
                                                    <a href="#">F.A.Q.</a>
                                                </li>

                                                <li class="lista-categoria-item">
                                                    <a href="#">Métodos de Pago</a>
                                                </li>

                                                <li class="lista-categoria-item">
                                                    <a href="#">Envíos</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>


                                </nav>
                            </div>


                            <div class="lista_carrito">

                                <form class="form-inline">
                                </form>
                            </nav>
                        </div>




                        <div class="row">
                            <div class="col">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                       @foreach ($ArrayProductos as $Productocarrito)

                                        <tr>
                                        <td>{{$Productocarrito->nombre_producto}}</td>
                                        <td>{{$Productocarrito->cantidad_producto}}</td>
                                        <td>${{$Productocarrito->precio_producto * $Productocarrito->cantidad_producto}}</td>
                                        </tr>

                                        @endforeach


                                            <tr class="table-warning">
                                                <th>Total</th>
                                                <th></th>
                                                <th>${{$precioTotal}} </th>
                                            </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                <button class="btn btn-primary active " type="submit" name="btnAñadirCarrito">Confirmar Compra</button>
                                <a href="/{categoria}" id="Reset" class="btn btn-danger">Resetear Carrito</a>
                                <a href="/" class="btn btn-success">Agregar Productos</a>
                            </div>
                            </div>
                        </div>




                    </div>






                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>




                </div>
            </body>
            </html>
