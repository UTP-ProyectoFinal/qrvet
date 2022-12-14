@extends('adminlte::page')
@section('title', 'Editar Alergia')
@section('content_header')
@stop
@section('template_title')
    Actualizar Alergia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Alergia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Alergias.update', $alergia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('alergias.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
