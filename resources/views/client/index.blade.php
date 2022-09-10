@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Medicos</h1>
@stop

@section('content')
    <table class="table">
        <caption>Lista de usuarios</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Estatus</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Christian</td>
                <td>Vilcapoma</td>
                <td>974677444</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Yaquelin</td>
                <td>Jimenez</td>
                <td>92164878</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Samir</td>
                <td>Poma</td>
                <td>948437583</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><i class="fa-light fa-pen-to-square"></i> <i class="fa-regular fa-trash"></i></td>
                <td>Poma</td>
                <td>948437583</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
