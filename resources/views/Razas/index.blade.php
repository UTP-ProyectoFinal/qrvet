@extends('adminlte::page')

@section('template_title')
    Razas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Razas') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('Razas.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
                                    {{ __('Crear Nueva Raza') }}
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
                                    <th>Especie</th>


                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($razas as $raza)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $raza->v_nombre }}</td>
                                        <td>{{ $raza->v_apuntes }}</td>
                                        <td>{{ $raza->medicos->name}}</td>
                                        <td>{{ $raza->especies->v_decripc}}</td>

                                        <td>
                                            <form action="{{ route('Razas.destroy', $raza->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('Razas.show', $raza->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Mostrar Datos</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('Razas.edit', $raza->id) }}"><i
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
                {!! $razas->links() !!}
            </div>
        </div>
    </div>
@endsection
