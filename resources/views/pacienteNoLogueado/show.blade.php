@extends('adminlte::page')

@section('template_title')
    {{ $paciente->name ?? 'Ver Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Pacientes') }}"> Volver atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nro de Identificación:</strong>
                            {{ $paciente->v_identifica }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de la mascota:</strong>
                            {{ $paciente->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido de la mascota:</strong>
                            {{ $paciente->v_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de nacimiento de la mascota:</strong>
                            {{ $paciente->d_fecnaci }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $paciente->sexo->v_decripc }}
                        </div>
                        <div class="form-group">
                            <strong>Raza:</strong>
                            {{ $paciente->raza->v_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dueño de la mascota:</strong>
                            {{ $paciente->cliente->v_nombre }} {{ $paciente->cliente->v_apellido }}
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                QR de identificación del paciente<br/>
                                {!!QrCode::size(150)->generate($paciente->v_identifica) !!}
                            </div>
                            <div class="col-md-5 text-right">
                                <form method="POST" action="{{ route('sendAlert') }}"  role="form">
                                    @csrf
                                    <input id="identificador" name="identificador" type="hidden" value="{{ $paciente->v_identifica }}">
                                    Hola, ¿Me encontraste y no sabes quien es mi dueño/a?<br/>
                                    <b>Por favor, ingresa tu número de teléfono para que mi dueño/a pueda contactarte.</b>
                                    <div class="form-group">
                                        {{ Form::text('phone', null, ['class' => 'form-control'. ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => '+51 999 888 777']) }}
                                        {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-block btn-danger">REPORTAR MASCOTA PERDIDA</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
