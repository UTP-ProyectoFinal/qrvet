{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenid@ al Sistema de Gestión de Historial Clinico Qr.Vet</h1>
@stop

@section('content')
<br><br>
    <div class="row">
        <div class="col-md-4">
            <b>Gestión de Clientes</b>
            <p>Registra y gestiona de una manera muy práctica a tus clientes. Tu información siempre estará ordenada y lista para analizar o depurar.</p>
        </div>
        <div class="col-md-4">
            <b>Gestión de Mascotas</b>
            <p>Registra y gestiona fácilmente a tus mascotas. Con razas y especies precargadas olvídate de la confusión de nombres y clasificaciones.</p>
        </div>
        <div class="col-md-4">
            <b>Revisión Médica de Rutina</b>
            <p>¿Que tal un chequeo rápido para ver si a la mascota le falta una vacuna o antigulgas?</p>
        </div>

    </div>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
