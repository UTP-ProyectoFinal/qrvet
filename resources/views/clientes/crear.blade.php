@extends('adminlte::page')
@section('title', 'Crear Cliente')
@section('content_header')
    <h1>Crear Cliente</h1>
@stop
@section('content')
<form method="POST">
    <div class="container">
    <div class="row">
        <div class="col">
            <label for="name" class="form-label">Nombres</label>
            <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres">
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
        <div class="col">
            <label for="name" class="form-label">Apellidos</label>
            <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos">
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
    </div>
        <br>
    <div class="row">
        <div class="col">
            <label for="name" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono">
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
        <div class="col">
            <label for="name" class="form-label">Teléfono Fijo</label>
            <input type="text" class="form-control" placeholder="Teléfono Fijo" aria-label="Teléfono Fijo">
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
    </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="name" class="form-label">Correo electrónico</label>
                <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Correo electrónico">
                @error('name')
                <p class="text-danger form-text">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <br>
        <div class="col">
            <label for="name" class="form-label">Estatus</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Habilitado
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Inhabilitado
                </label>
            </div>
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
    </div>
        <br>
            <button type="submit" class="btn btn-info">Guardar Cliente</button>
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
