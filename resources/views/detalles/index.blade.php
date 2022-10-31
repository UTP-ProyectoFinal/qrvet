@extends('adminlte::page')

@section('template_title')
    Nuestros Medicos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nuestros Medicos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Detalles.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear Nuevo Medico') }}
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
                                        <th>Identificador</th>

                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Clinica</th>
                                        <th>Perfil</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalles as $detalle)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $detalle->medicos->name }}</td>
                                            <td>{{ $detalle->medicos->email }}</td>
                                            <td>{{ $detalle->clinicas->v_nomclin}}</td>
                                            <td>{{ $detalle->perfiles->v_apuntes}}</td>

                                            <td>
                                                <form action="{{ route('Detalles.destroy', $detalle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('Detalles.show', $detalle->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('Detalles.edit', $detalle->id) }}"><i
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
                {!! $detalles->links() !!}
            </div>
        </div>
    </div>
@endsection