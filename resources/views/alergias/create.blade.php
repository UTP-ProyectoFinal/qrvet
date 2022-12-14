@extends('adminlte::page')

@section('template_title')
    Crear Alergia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Alergia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Alergias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('alergias.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection