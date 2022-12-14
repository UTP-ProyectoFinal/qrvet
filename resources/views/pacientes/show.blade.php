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
                        <div class="text-right">
                        QR de identificación del paciente<br/>
                            {!!QrCode::size(150)->generate( env('APP_URL', 'http://localhost/qrvet/public/').'validarqr/'.$paciente->v_identifica) !!}
                            <br><br>
                            {!!QrCode::size(70)->generate( env('APP_URL', 'http://localhost/qrvet/public/').'validarqr/'.$paciente->v_identifica) !!}
                            <br><br>
                            <input type="button" value="Imprimir" class="printbutton btn btn-info">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.querySelectorAll('.printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script>
@endsection
