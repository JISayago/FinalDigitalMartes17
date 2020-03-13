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

        <div class="Titulo"> <h2>Alta Categorias</h2></div>

        <div class="buscar">
            <nav class="navbar navbar-dark bg-primary">
             <div class="barra-navegacion">
                    <ul class="nav nav-pills">
                        <a class="navbar-brand" href="/">Proyecto Final</a>

                    </nav>
                </div>

                <br><br>
                <form action="/altaCategoria" method="POST">
                    @csrf
                    <div class="Categoria">

                        <input class="form-control form-control-lg w-50 mb-3" type="text" name="nombre_categoria"  placeholder="Nombre de la Categoria">


                        <button class="btn btn-outline-primary" type="submit" name="btnRegistro">Registrar</button>

                        <a href="/" class="btn btn-outline-danger">Cancelar</a>
                        <a href="/panel" class="btn btn-outline-success">Volver</a>


                    </div>
                </div>



            </form>

        </body>
        </html>
