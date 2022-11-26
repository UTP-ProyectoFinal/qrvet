@extends('adminlte::page')
@section('title', 'Editar Medicamento')
@section('content_header')
@stop
@section('template_title')
    Actualizar Medicamento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Medicamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Medicamentos.update', $medicamento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('medicamentos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
