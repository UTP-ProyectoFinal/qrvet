@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Diagnosticos</h1>
    <div class="alineado">
        <a href="{{route('Diagnosticos.create')}}" class="btn btn-info">Nuevo Diagnostico</a>
    </div>
@stop

@section('content')
    <table class="table">
        <caption>Lista de Diagnosticos</caption>
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
                <td>Artrosis codo derecho</td>
                <td>Sin apuntes</td>
                <td>Cristian</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cushing</td>
                <td>Sin apuntes</td>
                <td>Samir</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Ehrlichia</td>
                <td>Sin apuntes</td>
                <td>Yaquelin</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>

        </tbody>
    </table>
@stop
