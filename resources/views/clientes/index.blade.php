@extends('adminlte::page')

@section('template_title')
    Nuestros Clientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nuestros Clientes') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Clientes.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nuevo Cliente') }}
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

                                    <th>Nro. Documento</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $cliente->n_documento }}</td>
                                        <td>{{ $cliente->v_nombre }}</td>
                                        <td>{{ $cliente->v_apellido }}</td>
                                        <td>{{ $cliente->v_telefono}}</td>

                                        <td>
                                            <form action="{{ route('Clientes.destroy', $cliente->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Clientes.show', $cliente->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Clientes.edit', $cliente->id) }}"><i
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
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
