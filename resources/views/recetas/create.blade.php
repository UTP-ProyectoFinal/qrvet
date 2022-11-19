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
                        <form method="POST" action="{{ route('Recetas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('recetas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
