@extends('adminlte::page')

@section('template_title')
    {{ $diagnostico->name ?? 'Ver Diagnostico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Diagnostico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Diagnosticos') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre del Diagnostico:</strong>
                            {{ $diagnostico->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apuntes del Diagnostico:</strong>
                            {{ $diagnostico->v_apuntes }}
                        </div>
                        <div class="form-group">
                            <strong>Especialista:</strong>
                            {{ $diagnostico->medicos->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
