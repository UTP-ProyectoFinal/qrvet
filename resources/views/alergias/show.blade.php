@extends('adminlte::page')

@section('template_title')
    {{ $alergia->name ?? 'Ver Alergia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Alergia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Alergias') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de la Alergia:</strong>
                            {{ $alergia->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apuntes de la Alergia:</strong>
                            {{ $alergia->v_apuntes }}
                        </div>
                        <div class="form-group">
                            <strong>Especialista:</strong>
                            {{ $alergia->medicos->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
