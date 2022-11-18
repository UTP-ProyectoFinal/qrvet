@extends('adminlte::page')

@section('template_title')
    Añadir Alergia al paciente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Añadir Alergia al paciente</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Atención2</th>
                                    <th>Vacuna</th>
                                    <th>Medico2</th>
                                    <th>Paciente2</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($pacienteHasVacunas as $pacienteHasVacuna)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $pacienteHasVacuna->created_at }}</td>
                                        <td>{{ $pacienteHasVacuna->vacuna->v_nombre }}</td>
                                        <td>{{ $pacienteHasVacuna->medico->name}}</td>
                                        <td>{{ $pacienteHasVacuna->paciente->v_nombre}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <form method="POST" action="{{ route('PacienteHasVacunas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pacienteHasVacunas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
