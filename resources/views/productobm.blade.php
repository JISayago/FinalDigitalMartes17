@extends('layouts.abms')
@section('contenido')


<div class="row justify-content-center ">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center font-weight-bolder">{{ __('Alta de Producto') }}</div>

            <div class="card-body">
                <form action="/" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="nombre_producto" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Nombre') }}</h3></label>

                        <div class="col-md-6">
                            <input class="form-control form-control-lg w-100 mb-3 @error('nombre_producto') is-invalid @enderror" type="text" name="nombre_producto"   value="{{$productoBM->nombre_producto}}">
                            @error('nombre_producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="precio_producto" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Precio') }}</h3></label>

                        <div class="col-md-6">
                            <input class="form-control form-control-lg w-75 mb-3 @error('precio_producto') is-invalid @enderror" type="text" name="precio_producto" value="{{$productoBM->precio_producto}}">
                            @error('precio_producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="codigo_producto" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Codigo') }}</h3></label>

                        <div class="col-md-6">
                            <input class="form-control form-control-lg w-75 mb-3 @error('codigo_producto') is-invalid @enderror" type="text" name="codigo_producto"  value="{{$productoBM->codigo_producto}}">
                            @error('codigo_producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="stock_producto" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Cantidad') }}</h3></label>

                        <div class="col-md-6">
                            <input class="form-control form-control-lg w-75 mb-3 @error('stock') is-invalid @enderror" type="text" name="stock"  value ="{{$productoBM->stock}}">
                            @error('stock')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="detalle_producto" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Detalle') }}</h3></label>

                        <div class="col-md-6">
                            <input class="form-control w-100 form-control-lg @error('detalle_producto') is-invalid @enderror" type="text" name="detalle_producto"   value="{{$productoBM->detalle_producto}}">
                            @error('detalle_producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="marca" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Marca') }}</h3></label>

                        <div class="col-md-6">
                            <select class="custom-select custom-select-lg w-100 mb-3" name="marcas">
                                @foreach ($marcas as $marca)
                                <option value="{{$marca->marca_id}}">{{$marca->nombre_marca}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="categoria" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Categoría') }}</h3></label>

                        <div class="col-md-6">
                            <select class="custom-select custom-select-lg w-100 mb-3" name="categorias">
                                @foreach ($categorias as $categoria)
                                <option value="{{$categoria->categoria_id}}">{{$categoria->nombre_categoria}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="img_producto" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Imagen Producto') }}</h3></label>

                        <div class="col-md-6">
                            <input type="file" class="@error('img_producto') is-invalid @enderror" name="img_producto">
                            @error('img_producto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">

                            <button class="btn btn-primary" type="submit" name="btnModificar">Modificar</button>

                            <a href="/" class="btn btn-success">Cancelar</a>

                            <a href="/panel/{{$productoBM->producto_id}}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Acá cargas un archivos  -->
<div class="input-group mb-3">

    <input type="file" class="" name="img_producto">
</div>
@endsection
@section('botones')


@endsection
