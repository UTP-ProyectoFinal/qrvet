@extends('adminlte::page')

@section('template_title')
    {{ $vacuna->name ?? 'Ver Vacuna' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Vacuna</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Vacunas') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de la Vacuna:</strong>
                            {{ $vacuna->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apuntes de la Vacuna:</strong>
                            {{ $vacuna->v_apuntes }}
                        </div>
                        <div class="form-group">
                            <strong>Dias de Expiración:</strong>
                            {{ $vacuna->n_expira }}
                        </div>
                        <div class="form-group">
                            <strong>Especialista:</strong>
                            {{ $vacuna->medicos->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
