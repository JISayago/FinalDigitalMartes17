@extends('layouts.abms')

@section('botones')
                <form action="/altaMarca" method="POST" >
                    @csrf
                    <div class="Marca">

                        <label for="Marca"><h3>Marca :</h3></label><input class="form-control form-control-lg w-50 mb-3 @error('nombre_marca') is-invalid @enderror"  value = " {{ old('nombre_marca') }}" type="text" name="nombre_marca">
                         @error('nombre_marca')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                         <br>

                        <button class="btn btn-primary" type="submit" name="btnRegistro">Registrar</button>

                        <a href="/" class="btn btn-danger">Cancelar</a>

                        <a href="/panel" class="btn btn-success">Volver</a>

                    </div>
                </div>



            </form>
@endsection
