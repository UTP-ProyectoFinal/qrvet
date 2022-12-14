@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
        <h1 class="text-center">GRAFICOS ESTADISTICOS</h1>
@stop

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{URL::asset('/image/usuarios.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Usuarios por Mes</h5>
                    <p class="card-text">Este grafico nos sirve como reporte para identificar los usuarios registrados por un
                        mes determinado.</p>
                    {!! $chart1->renderHtml() !!}
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{URL::asset('/image/nombre.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Usuarios por Nombre</h5>
                    <p class="card-text">Este grafico nos sirve como reporte para identificar los usuarios registrados segun
                        su nombre especifico.</p>
                    {!! $chart2->renderHtml() !!}
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{URL::asset('/image/calendario.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alergias por Fecha</h5>
                    <p class="card-text">Este grafico nos sirve como reporte para identificar las alergias registradas por
                        una determinada fecha.</p>
                    {!! $chart3->renderHtml() !!}
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

@stop

@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    {!! $chart1->renderChartJsLibrary() !!}

    {!! $chart1->renderJs() !!}
    {!! $chart2->renderJs() !!}
    {!! $chart3->renderJs() !!}
@stop
