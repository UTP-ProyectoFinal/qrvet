@extends('adminlte::page')
@section('title', 'Editar Cliente')
@section('content_header')
    <h1>Editar Cliente</h1>
@stop
@section('template_title')
    Actualizar Cliente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Recetas</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Recetas.update', $historia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('recetas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
