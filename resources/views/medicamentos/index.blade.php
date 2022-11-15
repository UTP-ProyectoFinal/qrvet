@extends('adminlte::page')

@section('template_title')
    Medicamentos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Medicamentos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Medicamentos.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nuevo Medicamento') }}
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

                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Especialista</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($medicamentos as $medicamento)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $medicamento->v_nombre }}</td>
                                        <td>{{ $medicamento->v_apuntes }}</td>
                                        <td>{{ $medicamento->medicos->name}}</td>

                                        <td>
                                            <form action="{{ route('Medicamentos.destroy', $medicamento->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Medicamentos.show', $medicamento->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Medicamentos.edit', $medicamento->id) }}"><i
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
                {!! $medicamentos->links() !!}
            </div>
        </div>
    </div>
@endsection
