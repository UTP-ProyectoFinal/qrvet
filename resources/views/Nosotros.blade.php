@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <center><h1>Procesos</h1></center>
@stop

@section('content')
    <p>Nuestro Flujo de Procesos.</p>
    <iframe width="768" height="432" src="https://miro.com/app/live-embed/uXjVPbhKo9Q=/?moveToViewport=-399,-623,1257,1270&embedId=679326476438" frameborder="0" scrolling="no" allowfullscreen></iframe>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
