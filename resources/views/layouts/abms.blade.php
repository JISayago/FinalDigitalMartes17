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
    <title>Altas</title>

</head>
<body>

    <div class="conteiner">
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

                                <form class="form-inline" action="inicio" method="post">
                                    @csrf
                                    <input class="form-control mr-sm-2" name="buscador" type="text" placeholder="Buscar.." aria-label="Search">
                                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                                </form>
                            </nav>
                        </div>

                        <main >
                            @yield('botones')
                        </main>

</ul>

          </div>

     </body>

</html>
