@extends('adminlte::page')

@section('template_title')
    Nuestras Atenciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nuestras Atenciones') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Atenciones.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nueva Atencion') }}
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

                                    <th>Cliente</th>
                                    <th>Paciente</th>
                                    <th>Vacuna</th>
                                    <th>Alergia</th>
                                    <th>Historia</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($atenciones as $atencion)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $atencion->cliente->v_nombre}}</td>
                                        <td>{{ $atencion->paciente->v_nombre}}</td>
                                        <td>{{ $atencion->vacuna->v_nombre}}</td>
                                        <td>Ninguna</td>
                                        <td>No</td>
                                        <td>
                                            <form action="{{ route('Atenciones.destroy', $atencion->id) }}" method="POST">
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Atenciones.show', $atencion->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Editar Atencion</a>
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Atenciones.show', $atencion->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Añadir Alergia</a>
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Atenciones.show', $atencion->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Añadir Historia</a>

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
                {!! $atenciones->links() !!}
            </div>
        </div>
    </div>
@endsection
