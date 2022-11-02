@extends('adminlte::page')

@section('template_title')
    Diagnosticos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Diagnosticos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Diagnosticos.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nuevo Diagnostico') }}
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
                                    <th>Especialista</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($diagnosticos as $diagnostico)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $diagnostico->v_nombre }}</td>
                                        <td>{{ $diagnostico->v_apuntes }}</td>
                                        <td>{{ $diagnostico->medicos->name}}</td>

                                        <td>
                                            <form action="{{ route('Diagnosticos.destroy', $diagnostico->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Diagnosticos.show', $diagnostico->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Diagnosticos.edit', $diagnostico->id) }}"><i
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
                {!! $diagnosticos->links() !!}
            </div>
        </div>
    </div>
@endsection
