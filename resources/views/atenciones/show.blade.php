@extends('adminlte::page')

@section('template_title')
    {{ $cliente->name ?? 'Ver Clientes' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Clientes') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Tipo de Documento:</strong>
                            {{ $cliente->n_tipodoc }}
                        </div>
                        <div class="form-group">
                            <strong>Documento de identidad:</strong>
                            {{ $cliente->n_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $cliente->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $cliente->v_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electronico:</strong>
                            {{ $cliente->v_correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Celular:</strong>
                            {{ $cliente->v_telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Fijo:</strong>
                            {{ $cliente->v_telfijo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
