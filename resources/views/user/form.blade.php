<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Nombre Completo') }}
                    {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Correo electrónico') }}
                    {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo electrónico']) }}
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Contraseña') }}
                    {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
                    {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Telefono') }}
                    {{ Form::text('v_telefono', $userDetalle->v_telefono, ['class' => 'form-control', 'placeholder' => 'Telefono']) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Cod. colegio') }}
                    {{ Form::text('v_codcolegio', $userDetalle->v_codcolegio, ['class' => 'form-control', 'placeholder' => 'Código de Colegio']) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <b>¿Usuario activo?</b><br>Check para activar :
                    {{ Form::checkbox('n_estatus', 1, $userDetalle->n_estatus, []) }}
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Clinica') }}
                    {{ Form::select('n_clinica', $clinicas, $userDetalle->n_clinica, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Perfiles') }}
                    {{ Form::select('n_perfil', $perfiles, $userDetalle->n_perfil, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
