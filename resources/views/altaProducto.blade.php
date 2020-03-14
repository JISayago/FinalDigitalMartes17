@extends('layouts.abms')

@section('botones')

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


<button class="btn btn-primary" type="submit" name="btnRegistro">Registrar</button>

                        <a href="/" class="btn btn-danger">Cancelar</a>

                        <a href="/panel" class="btn btn-success">Volver</a>
</form>
@endsection
