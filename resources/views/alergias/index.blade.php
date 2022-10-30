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
        @foreach($alergias as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->v_nombre}}</td>
                <td>{{$row->v_apuntes}}</td>
                <td>{{$row->a_n_iduser}}</td>
                <td>
                    <a href="{{route('Alergias.create')}}"><i class="fa fa-edit"></i></a>
                    <i class="fa fa-trash"></i>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@stop
