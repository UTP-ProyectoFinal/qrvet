@extends('adminlte::page')
@section('title', 'Crear Medicación')
@section('content_header')
    <h1>Crear Medicación</h1>
@stop
@section('content')
    <form method="POST" action="{{route('GuardarMedicamento')}}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Nombre / Generico / Componente Activo</label>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre de la medicacion" aria-label="Nombres">
                    @error('nombre')
                    <p class="text-danger form-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <div class="col">
                    <label for="name" class="form-label">Apuntes</label>
                    <textarea name="apuntes" class="form-control" placeholder="Descripción o comentarios" rows="3"></textarea>
                    @error('apuntes')
                    <p class="text-danger form-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-info">Guardar Medicación </button>
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
