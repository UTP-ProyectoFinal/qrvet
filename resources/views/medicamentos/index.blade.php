@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Medicamentos</h1>
    <div class="alineado">
        <a href="{{route('Medicamentos.create')}}" class="btn btn-info">Nuevo Medicamento</a>
    </div>
@stop

@section('content')
    <table class="table">
        <caption>Lista de Medicamentos</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Medicamentos</th>
                <th scope="col">Información Extra</th>
                <th scope="col">Creador</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Carbón activado</td>
                <td>reductor de toxinas.</td>
                <td>Cristian</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cambio de ALimento</td>
                <td>en gatos ayuda a la agresión, aumenta el afecto y amistad hacia dueños, puede aumentar agresión en otros contextos.	</td>
                <td>Samir</td>
                <td>
                    <a href="{{route('qrv_clientes.create')}}"><i class="fa fa-edit"></i></a>

                    <i class="fa fa-trash"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Broncophar plus</td>
                <td>dextrometorfano + bromehixida + antihistaminico</td>
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
