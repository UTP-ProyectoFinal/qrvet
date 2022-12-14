@extends('adminlte::page')

@section('template_title')
    Nuestros Pacientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nuestros Pacientes') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Pacientes.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nuevo Paciente') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>#</th>

                                    <th>Nro. Identificación</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Sexo</th>
                                    <th>Raza</th>
                                    <th>Dueño de mascota</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($pacientes as $paciente)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $paciente->v_identifica }}</td>
                                        <td>{{ $paciente->v_nombre }}</td>
                                        <td>{{ $paciente->v_apellido }}</td>
                                        <td>{{ $paciente->d_fecnaci}}</td>
                                        <td>{{ $paciente->sexo->v_decripc}}</td>
                                        <td>{{ $paciente->raza->v_nombre}}</td>
                                        <td>{{ $paciente->cliente->v_nombre}} {{ $paciente->cliente->v_apellido}}</td>

                                        <td>
                                            <form action="{{ route('Pacientes.destroy', $paciente->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Pacientes.show', $paciente->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Pacientes.edit', $paciente->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Editar Datos</a>
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@endsection
