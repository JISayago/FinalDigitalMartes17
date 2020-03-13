<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/416cfb6a1a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>e-commerce</title>
</head>


<body>

    <div class="conteiner">

        <!-- acá va el auth -->
        <div class="logo-auth">
            <h3>Acá va el auth</h3>
        </div>

        <!-- barra de navegacion 1  -->
        <!-- lista de categoria -->
        <!-- lista nosotros  -->
        <!-- carrito  -->


        <!-- barra de navegacion busqueda-->
        <div class="buscar">
            <nav class="navbar navbar-dark bg-primary">
                <a href="/" class="navbar-brand">Proyecto Final</a>
                <div class="barra-navegacion">
                    <ul class="nav nav-pills">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Altas</a>

                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="altaProducto" id="">Alta Producto</a>
                                <a class="dropdown-item" href="altaCategoria" id="">Alta Categoria</a>
                                <a class="dropdown-item" href="altaMarca" id="">Alta Marca</a>
                            </div>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Baja/Modificacion</a>

                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="bajamodificacion" id="">Baja/Modificacion Producto</a>

                            </div>

                        </li>




                                    <form class="form-inline" action="inicio" method="post">
                                        @csrf
                                        <input class="form-control mr-sm-2" name="buscador" type="text" placeholder="Buscar.." aria-label="Search">
                                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                                    </form>
                                </nav>
                            </div>






                            <!-- Optional JavaScript -->
                            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                        </body>
                        </html>
