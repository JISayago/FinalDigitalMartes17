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

        <div class="Titulo"> <h2>Alta Marca</h2></div>

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
                <form action="/altaMarca" method="POST" >
                    @csrf
                    <div class="Marca
                    ">

                        <input class="form-control form-control-lg w-50 mb-3" type="text" name="nombre_marca"  placeholder="Nombre de la Marca">


                        <button class="btn btn-primary" type="submit" name="btnRegistro">Registrar</button>

                        <a href="/" class="btn btn-danger">Cancelar</a>

                        <a href="/panel" class="btn btn-success">Volver</a>

                    </div>
                </div>



            </form>

        </body>
        </html>
