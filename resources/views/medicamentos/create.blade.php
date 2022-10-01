@extends('adminlte::page')
@section('title', 'Crear Medicación')
@section('content_header')
    <h1>Crear Medicación</h1>
@stop
@section('content')
    <form method="POST">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Nombre / Generico / Componente Activo</label>
                    <input type="text" class="form-control" placeholder="Nombre de la medicacion" aria-label="Nombres">
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
            <button type="submit" class="btn btn-info">Guardar Medicación </button>
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
