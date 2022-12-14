@extends('adminlte::page')

@section('template_title')
    {{ $raza->name ?? 'Ver Raza' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Raza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Razas') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de la raza:</strong>
                            {{ $raza->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apuntes de la raza:</strong>
                            {{ $raza->v_apuntes }}
                        </div>
                        <div class="form-group">
                            <strong>Especie:</strong>
                            {{ $raza->especies->v_decripc}}
                        </div>
                        <div class="form-group">
                            <strong>Especialista:</strong>
                            {{ $raza->medicos->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
