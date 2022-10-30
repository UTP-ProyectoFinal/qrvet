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
        @foreach($razas as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->v_nombre}}</td>
                <td>{{$row->v_apuntes}}</td>
                <td>{{$row->a_n_iduser}}</td>
                <td>
                    <a href="{{route('Razas.create')}}"><i class="fa fa-edit"></i></a>
                    <i class="fa fa-trash"></i>
                </td>
            </tr>
        @endforeach

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
