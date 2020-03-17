@extends('layouts.abms')

@section('botones')

<div class="row justify-content-center ">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center font-weight-bolder">{{ __('Alta de Marca') }}</div>

            <div class="card-body">
                <form action="/altaMarca" method="POST" >
                    @csrf

                    <div class="form-group row">
                        <label for="marca" class="col-md-4 col-form-label text-md-right"><h3>{{ __('Marca') }}</h3></label>

                        <div class="col-md-6">
                            <input class="form-control form-control-lg w-75 mb-3 @error('nombre_marca') is-invalid @enderror"  value = " {{ old('nombre_marca') }}" type="text" name="nombre_marca">
                            @error('nombre_marca')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="btn btn-primary" type="submit" name="btnRegistro">Registrar</button>

                            <a href="/" class="btn btn-danger">Cancelar</a>

                            <a href="/panel" class="btn btn-success">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
