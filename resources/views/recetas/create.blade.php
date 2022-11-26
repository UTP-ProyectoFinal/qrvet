@extends('adminlte::page')

@section('template_title')
    Añadir Medicamento a la receta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Añadir Medicamento a la receta</span>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>#</th>
                                    <th>Medicamento</th>
                                    <th>Cantidad</th>
                                    <th>Dosis</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($recetas as $rs)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $rs->medicamento->v_nombre }}</td>
                                        <td>{{ $rs->n_cantidad }}</td>
                                        <td>{{ $rs->v_dosis }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <form method="POST" action="{{ route('Recetas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('recetas.form')

                        </form>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <input type="button" value="Imprimir" class="printbutton btn btn-info">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.querySelectorAll('.printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script>
@endsection
