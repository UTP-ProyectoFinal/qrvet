@extends('adminlte::page')

@section('template_title')
    Crear Diagnostico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Diagnostico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Diagnosticos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('diagnosticos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
