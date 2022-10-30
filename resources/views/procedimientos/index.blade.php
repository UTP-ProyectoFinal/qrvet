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
        @foreach($procedimientos as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->v_nombre}}</td>
                <td>{{$row->v_apuntes}}</td>
                <td>{{$row->a_n_iduser}}</td>
                <td>
                    <a href="{{route('Procedimientos.create')}}"><i class="fa fa-edit"></i></a>
                    <i class="fa fa-trash"></i>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop
