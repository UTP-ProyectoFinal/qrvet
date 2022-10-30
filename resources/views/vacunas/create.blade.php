@extends('adminlte::page')
@section('title', 'Crear Vacuna')
@section('content_header')
    <h1>Crear Vacuna</h1>
@stop
@section('content')
    <form method="POST" action="{{route('GuardarVacuna')}}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Vacuna" aria-label="Nombres">
                    @error('nombre')
                    <p class="text-danger form-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Apuntes</label>
                    <textarea name="apuntes" class="form-control" placeholder="Descripción o comentarios" rows="3"></textarea>
                    @error('apuntes')
                    <p class="text-danger form-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Dias de Expiración</label>
                    <input type="number" name="expira" class="form-control" placeholder="Dias de Expiración" aria-label="Dias"> Dias
                    @error('expira')
                    <p class="text-danger form-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-info">Guardar Vacuna </button>
        </div>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@stop

@section('css')
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
