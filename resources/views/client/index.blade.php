@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>MedicosTIA</h1>
@stop

@section('content')
    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Christian</td>
                <td>Yaquelin</td>
                <td>@vilcax98</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Samir</td>
                <td>Hello</td>
                <td>@building</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Welcome</td>
                <td>Hiii</td>
                <td>@integrador2</td>
            </tr>
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
