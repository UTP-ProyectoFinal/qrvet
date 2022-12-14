@extends('adminlte::page')

@section('template_title')
    Crear Medicamento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Medicamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Medicamentos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('medicamentos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
