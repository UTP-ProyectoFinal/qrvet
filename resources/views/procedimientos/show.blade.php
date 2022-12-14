@extends('adminlte::page')

@section('template_title')
    {{ $procedimiento->name ?? 'Ver Procedimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Procedimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Procedimientos') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre del Procedimiento:</strong>
                            {{ $procedimiento->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apuntes del Procedimiento:</strong>
                            {{ $procedimiento->v_apuntes }}
                        </div>
                        <div class="form-group">
                            <strong>Notificacion:</strong>
                            {{ $procedimiento->n_notifica }}
                        </div>
                        <div class="form-group">
                            <strong>Especialista:</strong>
                            {{ $procedimiento->medicos->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
