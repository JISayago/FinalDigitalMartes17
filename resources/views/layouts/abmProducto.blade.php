<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>e-commerce</title>

</head>

<body>

    <div class="container">

        <div class="Titulo"> <h2>Producto</h2></div>

        <div class="buscar">
            <nav class="navbar navbar-dark bg-primary">
                <!-- barra de navegacion 1  -->
                <!-- lista de categoria -->
                <!-- lista nosotros  -->
                <!-- carrito  -->

                <div class="barra-navegacion">
                    <ul class="nav nav-pills">
                        <a class="navbar-brand" href="/">Proyecto Final</a>

                    </nav>
                </div>

                <br><br>
                <form action="/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="Marca_producto">

                        <input class="form-control form-control-lg w-50 mb-3" type="text" name="nombre_producto"  placeholder="Nombre del Producto" value="@yield('nombre_producto')">
                        <input class="form-control form-control-lg w-25 mb-3" type="text" name="precio_producto" placeholder="Precio del Producto" value="@yield('precio_producto')">
                        <input class="form-control form-control-lg w-25 mb-3" type="text" name="codigo_producto" placeholder="Codigo del Producto" value="@yield('codigo_producto')">
                        <input class="form-control form-control-lg w-25 mb-3" type="text" name="stock" placeholder="Cantidad Ingresante"value="@yield('stock')">
                        <label for="marcas"><h5>Elegir Marca:</h5></label> <select class="custom-select custom-select-lg w-25 mb-3" name="marcas">
                            @foreach ($marcas as $marca)
                            <option value="{{$marca->marca_id}}">{{$marca->nombre_marca}}</option>
                            @endforeach
                        </select><br>
                        <label for="categorias"><h5>Elegir Categoria:</h5></label> <select class="custom-select custom-select-lg w-25 mb-3" name="categorias">
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->categoria_id}}">{{$categoria->nombre_categoria}}</option>
                            @endforeach
                        </select><br>




                        <input class="form-control w-50 form-control-lg" type="text" name="detalle_producto"   placeholder="Detalle del Producto" value="@yield('detalle_producto')">
                    </div><br>


                    <!-- Acá cargas un archivos  -->
                    <div class="input-group mb-3">

                        <input type="file" class="" name="img_producto">
                    </div>


                    @yield('botones')



                    </div>
                </div>



            </form>

        </body>
        </html>
