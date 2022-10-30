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
        @foreach($medicamentos as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->v_nombre}}</td>
                <td>{{$row->v_apuntes}}</td>
                <td>{{$row->a_n_iduser}}</td>
                <td>
                    <a href="{{route('Medicamentos.create')}}"><i class="fa fa-edit"></i></a>
                    <i class="fa fa-trash"></i>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
