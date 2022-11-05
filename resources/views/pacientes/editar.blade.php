@extends('adminlte::page')
@section('title', 'Editar Paciente')
@section('content_header')
    <h1>Editar Paciente</h1>
@stop
@section('template_title')
    Actualizar Paciente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Paciente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Pacientes.update', $paciente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pacientes.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
