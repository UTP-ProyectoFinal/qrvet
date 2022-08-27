@extends('connect.master')
@section('tittle', 'Login')
@section('content')
    <div class="box box_login shadow p-3 mb-5 bg-body rounded">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/logo.jpg') }}">
            </a>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/login']) !!}
            <label for="email">Correo electronico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text height-icon"><i class="fa-brands fa-mailchimp"></i></div>
                </div>
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Introduce tu email']) !!}
            </div>
            <label for="email" class="mtop16">Contrasena:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text height-icon"><i class="fa-solid fa-lock"></i></div>
                </div>
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Introduce tu contraseña']) !!}
            </div>
            {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-success mtop16']) !!}
            {!! Form::close() !!}
            <div class="footer mtop16">
                <a href="{{ url('/register') }}">¿No tienes cuenta? Registrate</a>
                <a href="{{ url('/register') }}">¿Olvidaste tu cuenta? Recuperala</a>
            </div>
        </div>
    </div>
@stop
