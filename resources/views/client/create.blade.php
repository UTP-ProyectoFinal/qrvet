@extends('adminlte::page')
@section('title', 'Crear medico')
@section('content_header')
    <h1>Crear Medico</h1>
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
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono">
            </div>
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
        <div class="col">
            <label for="name" class="form-label">Código de Colegio</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-address-card"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="Código de Colegio" aria-label="Código de Colegio">
            </div>
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
    </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="name" class="form-label">Correo electrónico</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Correo electrónico">
                </div>
                @error('name')
                <p class="text-danger form-text">{{ $message }}</p>
                @enderror
            </div>
            <div class="col">
                <label for="name" class="form-label">Contraseña</label>
                <input type="password" id="inputPassword5"  placeholder="Contraseña" class="form-control" aria-describedby="passwordHelpBlock">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </small>                @error('name')
                <p class="text-danger form-text">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <br>
    <div class="row">
        <div class="col">
            <label for="name" class="form-label">Clinica</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Seleccionar una clinica</option>
                <option>Club Pet</option>
            </select>
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
        <div class="col">
            <label for="name" class="form-label">Perfil</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Seleccionar una perfil</option>
                    <option>Administrador</option>
                    <option>Medico</option>
                </select>
            @error('name')
            <p class="text-danger form-text">{{ $message }}</p>
            @enderror
        </div>
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
            <button type="submit" class="btn btn-info">Guardar Medico</button>
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
