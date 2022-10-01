@extends('adminlte::page')
@section('title', 'Crear Procedimiento')
@section('content_header')
    <h1>Crear Procedimiento</h1>
@stop
@section('content')
    <form method="POST">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre del Procedimiento" aria-label="Nombres">
                    @error('name')
                    <p class="text-danger form-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <div class="col">
                    <label for="name" class="form-label">Apuntes</label>
                    <textarea class="form-control" placeholder="Descripción o comentarios" rows="3"></textarea>
                    @error('name')
                    <p class="text-danger form-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-info">Guardar Procedimiento </button>
        </div>
    </form>
@stop

@section('css')
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
