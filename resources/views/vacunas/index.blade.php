@extends('adminlte::page')

@section('template_title')
    Vacunas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vacunas') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Vacunas.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nueva Vacuna') }}
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
                                    <th>Expiracion</th>
                                    <th>Especialista</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($vacunas as $vacuna)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $vacuna->v_nombre }}</td>
                                        <td>{{ $vacuna->v_apuntes }}</td>
                                        <td>{{$vacuna->n_expira}}</td>
                                        <td>{{ $vacuna->medicos->name}}</td>

                                        <td>
                                            <form action="{{ route('Vacunas.destroy', $vacuna->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Vacunas.show', $vacuna->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Vacunas.edit', $vacuna->id) }}"><i
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
                {!! $vacunas->links() !!}
            </div>
        </div>
    </div>
@endsection
