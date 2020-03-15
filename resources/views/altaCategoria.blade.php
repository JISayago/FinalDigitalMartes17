@extends('layouts.abms')

@section('botones')
<br>
                <form action="/altaCategoria" method="POST">
                    @csrf
                    <div class="Categoria">

                        <label for="Categoria"><h3>Categoria :</h3></label><input class="form-control form-control-lg w-50 mb-3 @error('nombre_categoria') is-invalid @enderror" type="text" name="nombre_categoria"placeholder="Nombre de la Categoria"  value = " {{ old('nombre_categoria') }}" >
                        @error('nombre_categoria')
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
