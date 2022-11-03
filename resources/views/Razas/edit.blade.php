@extends('adminlte::page')
@section('title', 'Editar Razas')
@section('content_header')
    <h1>Editar Raza</h1>
@stop
@section('template_title')
    Actualizar Raza
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Raza</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Razas.update', $raza->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('razas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
