@extends('adminlte::page')

@section('template_title')
    Procedimientos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Procedimientos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Procedimientos.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nuevo Procedimiento') }}
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
                                    <th>Descripcion</th>
                                    <th>Notificacion</th>
                                    <th>Especialista</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($procedimientos as $procedimiento)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $procedimiento->v_nombre }}</td>
                                        <td>{{ $procedimiento->v_apuntes }}</td>
                                        <td>{{ $procedimiento->n_notifica }}</td>
                                        <td>{{ $procedimiento->medicos->name}}</td>

                                        <td>
                                            <form action="{{ route('Procedimientos.destroy', $procedimiento->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Procedimientos.show', $procedimiento->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Procedimientos.edit', $procedimiento->id) }}"><i
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
                {!! $procedimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
