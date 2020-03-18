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
    <link rel="stylesheet" href="{{('/css/style.css')}}">
    <title>e-commerce</title>
</head>


<body>

    <div class="conteiner">
        <div class="top">
        <div class="flex-center position-ref full-height">
            <div class="top-right links bg-primary text-right ">

                <!-- Authentication Links -->
                @guest

                <a class="text-white text-decoration-none btn btn-primary" href="{{ route('login') }}">{{ __('Ingreso') }}</a>

                @if (Route::has('register'))

                <a class="text-white text-decoration-none btn btn-primary" href="{{ route('register') }}">{{ __('Registro') }}</a>

                @endif
            </div>
            @else
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="dropdown-toggle text-white text-decoration-none btn btn-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sessión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>

    <!-- barra de navegacion busqueda-->
    <div class="buscar">
        <nav class="navbar navbar-dark bg-primary">
            <a href="/" class="navbar-brand">Proyecto Final</a>
            <div class="barra-navegacion">
                <ul class="nav nav-pills">


                    <a class="text-white text-decoration-none btn btn-primary " href="/panel">Administracion</a>

                    <!-- <a class="dropdown-item" href="#">Mi cuenta</a>-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white text-decoration-none btn btn-primary" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Categoria</a>
                        <div class="dropdown-menu" >
                            <ul class="lista-categoria">

                                @foreach ($categorias as $categoria)

                                <li class="dropdown-item">
                                    <a class="dropdown-item text-decoration-none" href="../{{$categoria->nombre_categoria}}" id="{{$categoria->nombre_categoria}}">{{$categoria->nombre_categoria}}</a>
                                </li>
                                @endforeach
                            </div>

                            <li class="nav-item dropdown">
                                <a class="text-white text-decoration-none btn btn-primary" href="/carrito">Carrito</a>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white text-decoration-none btn btn-primary" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Información</a>
                                    <div class="dropdown-menu">
                                        <ul class="lista-categoria ">

                                            <li class="lista-categoria-item">
                                                <a class="dropdown-item text " href="/recomendaciones">Recomendaciones</a>
                                            </li>

                                            <li class="lista-categoria-item">
                                                <a class="dropdown-item" href="/faq">F.A.Q.</a>
                                            </li>

                                            <li class="lista-categoria-item">
                                                <a class="dropdown-item" href="formaspago">Métodos de Pago</a>
                                            </li>

                                            <li class="lista-categoria-item">
                                                <a class="dropdown-item" href="envios">Envíos</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <form class="form-inline" action="inicio" method="post">
                                    @csrf
                                    <input class="form-control mr-sm-2 txtBuscar" name="buscador" type="text" placeholder="Buscar.." aria-label="Search">
                                    <button class="btn btn-outline-light btnBuscar" type="submit">Buscar</button>
                                </form>
                            </nav>
                        </div>
                    </div>
<div class="cuerpo">
                        <main class="principal" >
                            @yield('centralPagina')
                        </main>

</ul>
                        <div class="container_redes_sociales" >

                            <div class="sticky-container">
                                <ul class="sticky">
                                    <li>
                                        <img src="../img/facebook2.png" width="32" height="32">
                                        <p><a href="https://www.facebook.com/programacionnet" target="_blank">Síguenos en<br>Facebook</a></p>
                                    </li>

                                    <li>
                                        <img src="../img/twitter.png" width="32" height="32">
                                        <p><a href="https://twitter.com/noprog" target="_blank">Síguenos en<br>Twitter</a></p>
                                    </li>

                                    <li>
                                        <img src="../img/youtube.png" width="32" height="32">
                                        <p><a href="http://www.youtube.com/programacionnet" target="_blank">Subscríbete en<br>YouTube</a></p>
                                    </li>


                                    <li>
                                        <img src="../img/instagram2.png" width="32" height="32">
                                        <p><a href="https://www.instagram.com/programacionnet" target="_blank">Síguenos en <br>Instagram</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="divfooter">
                        <footer class="footer links bg-primary">
                            <div class="footIzquierda">
                                <label>Direccion: <a href="">J. Ingenieros 260, T4000 San Miguel de Tucumán, Tucumán</a></label><br><br>
                                <label>Teléfono: <a href="tel:0381 497-2700">0381 497-2700</a></label>

                            </div>
                            <div class="footcentro">

                                <a href="/" class="navbar-brand">Proyecto Final</a>
                            </div>
                            <div class="footderecha">
                                <ul>
                                    <li><a href="faq">F.A.Q</a></li>
                                    <li><a href="envios">Envíos</a></li>
                                    <li><a href="recomendaciones">Recomendaciones</a></li>
                                    <li><a href="formaspago">Métodos de Pago</a></li>

                                </ul>

                            </div>

                        </footer>
                    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

          </div>

     </body>
</html>
