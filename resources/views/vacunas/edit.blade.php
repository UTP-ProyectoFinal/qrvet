@extends('adminlte::page')
@section('title', 'Editar Vacuna')
@section('content_header')
    <h1>Editar Vacunas</h1>
@stop
@section('template_title')
    Actualizar Vacuna
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Vacuna</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Vacunas.update', $vacuna->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('vacunas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
