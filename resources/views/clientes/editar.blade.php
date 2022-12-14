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
                        <span class="card-title">Editar Cliente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Clientes.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('clientes.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
