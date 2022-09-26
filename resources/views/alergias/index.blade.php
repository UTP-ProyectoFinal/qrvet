@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Alergias</h1>
    <div class="alineado">
        <a href="{{route('Alergias.create')}}" class="btn btn-info">Nueva Alergia</a>
    </div>
@stop

@section('content')
    <table class="table">
        <caption>Lista de Alergias</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Alergia</th>
                <th scope="col">Información Extra</th>
                <th scope="col">Creador</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Dermatitis alimentaria</td>
                <td>Dermatitis a causa de un componente de los alimentos</td>
                <td>Cristian</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Atopía</td>
                <td>Alergia al ambiente, polen, moho, etc.</td>
                <td>Samir</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Dermatitis autoinmunes</td>
                <td>Eritremas</td>
                <td>Yaquelin</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
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
