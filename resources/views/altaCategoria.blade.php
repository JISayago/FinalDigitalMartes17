@extends('layouts.abms')

@section('botones')


<div class="row justify-content-center ">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center font-weight-bolder">{{ __('Alta de Categoría') }}</div>

            <div class="card-body">
                <form action="/altaCategoria" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="categoria" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Categoria') }}</h3></label>

                        <div class="col-md-6">
                            <input class="categoria form-control form-control-lg w-75 mb-3 @error('nombre_categoria') is-invalid @enderror" type="text" name="nombre_categoria"placeholder="Nombre de la Categoria"  value = " {{ old('nombre_categoria') }}" >
                            @error('nombre_categoria')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="btn btn-primary btnRegistro" type="submit" name="btnRegistro">Registrar</button>

                        <a href="/" class="btn btn-danger btnCancelar">Cancelar</a>
                        <a href="/panel" class="btn btn-success">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
