@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Razas</h1>
    <div class="alineado">
        <a href="{{route('Razas.create')}}" class="btn btn-info">Nueva Raza</a>
    </div>
@stop

@section('content')
    <table class="table">
        <caption>Lista de Razas</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Especie</th>
                <th scope="col">Raza</th>
                <th scope="col">Creador</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ave</td>
                <td>Periquito</td>
                <td>Cristian</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Canino</td>
                <td>Labrador Retriever</td>
                <td>Samir</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Gato</td>
                <td>Persa</td>
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
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
