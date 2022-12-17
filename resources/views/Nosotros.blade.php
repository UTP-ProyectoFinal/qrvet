@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <center><h1>Procesos</h1></center>
@stop

@section('content')
    <p>Nuestro Flujo de Procesos.</p>
    <iframe width="768" height="432" src="https://miro.com/app/live-embed/uXjVPbhKo9Q=/?moveToViewport=-399,-623,1257,1270&embedId=679326476438" frameborder="0" scrolling="no" allowfullscreen></iframe>
        <iframe title="Sales & Returns Sample v201912" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=cdad6276-f4ff-4be5-95cd-54735ba30fc7&autoAuth=true&ctid=c4a66c34-2bb7-451f-8be1-b2c26a430158" frameborder="0" allowFullScreen="true"></iframe>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
