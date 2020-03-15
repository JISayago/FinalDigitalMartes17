@extends('layouts.abms')

@section('botones')

<form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="Marca_producto">

        <label for="Producto"><h3>Producto :</h3></label> <input class="form-control form-control-lg w-50 mb-3 @error('nombre_producto') is-invalid @enderror" type="text" name="nombre_producto"  value = " {{ old('nombre_producto') }}">
        @error('nombre_producto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        <label for="Precio"><h3>Precio :</h3></label><input class="form-control form-control-lg w-25 mb-3 @error('precio_producto') is-invalid @enderror" type="text" name="precio_producto"  value = " {{ old('precio_producto') }}">
        @error('precio_producto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        <label for="Codigo"><h3>Codigo del Producto :</h3></label><input class="form-control form-control-lg w-25 mb-3 @error('codigo_producto') is-invalid @enderror" type="text" name="codigo_producto"  value = " {{ old('codigo_producto') }}">
        @error('codigo_producto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        <label for="Stock"><h3>Cantidad Ingresante: :</h3></label> <input class="form-control form-control-lg w-25 mb-3 @error('stock') is-invalid @enderror" type="text" name="stock"  value = " {{ old('stock') }}">
        @error('stock')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
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





        <label for="Categoria"><h3>Detalle :</h3></label><input class="form-control w-50 form-control-lg @error('detalle_producto') is-invalid @enderror" type="text" name="detalle_producto"   value = " {{ old('detalle_producto') }}">
        @error('detalle_producto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <br>
    </div><br>


    <!-- Acá cargas un archivos  -->
    <div class="input-group mb-3">

        <input type="file" class="@error('img_producto') is-invalid @enderror" name="img_producto">
        @error('img_producto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
    </div>


<button class="btn btn-primary" type="submit" name="btnRegistro">Registrar</button>

                        <a href="/" class="btn btn-danger">Cancelar</a>

                        <a href="/panel" class="btn btn-success">Volver</a>
</form>
@endsection
