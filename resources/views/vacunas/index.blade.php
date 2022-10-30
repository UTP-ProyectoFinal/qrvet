@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vacunas</h1>
    <div class="alineado">
        <a href="{{route('Vacunas.create')}}" class="btn btn-info">Nueva Vacuna</a>
    </div>
@stop

@section('content')
    <table class="table">
        <caption>Lista de Vacunas</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Vacuna</th>
                <th scope="col">Información Extra</th>
                <th scope="col">Feccha Expiración</th>
                <th scope="col">Creador</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vacunas as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->v_nombre}}</td>
                <td>{{$row->v_apuntes}}</td>
                <td>{{$row->n_expira}}</td>
                <td>{{$row->a_n_iduser}}</td>
                <td>
                    <a href="{{route('Vacunas.create')}}"><i class="fa fa-edit"></i></a>
                    <i class="fa fa-trash"></i>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
