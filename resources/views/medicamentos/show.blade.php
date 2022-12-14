@extends('adminlte::page')

@section('template_title')
    {{ $medicamento->name ?? 'Ver Medicamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Medicamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Medicamentos') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre del Medicamento:</strong>
                            {{ $medicamento->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apuntes del Medicamento:</strong>
                            {{ $medicamento->v_apuntes }}
                        </div>
                        <div class="form-group">
                            <strong>Especialista:</strong>
                            {{ $medicamento->medicos->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
