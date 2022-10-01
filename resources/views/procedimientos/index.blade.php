@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Procedimientos</h1>
    <div class="alineado">
        <a href="{{route('Procedimientos.create')}}" class="btn btn-info">Nuevo Procedimiento</a>
    </div>
@stop

@section('content')
    <table class="table">
        <caption>Lista de Procedimientos</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Procedimiento</th>
                <th scope="col">Información Extra</th>
                <th scope="col">Creador</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Baño Medicado.</td>
                <td>Baño con medicacion	</td>
                <td>Cristian</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cirugía Cesarea	</td>
                <td>Cesarea como metodo de parto</td>
                <td>Samir</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cirugía de Esterilizacion</td>
                <td>Cirugía de esterilizacion y/o castración</td>
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
