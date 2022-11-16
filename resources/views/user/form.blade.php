<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clave') }}
            {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('v_telefono', $userDetalle->v_telefono, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('Cod. colegio') }}
            {{ Form::text('v_codcolegio', $userDetalle->v_codcolegio, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::checkbox('n_estatus', 1, $userDetalle->n_estatus, []) }}
        </div>

        <div class="form-group">
            {{ Form::label('Clinica') }}
            {{ Form::select('n_clinica', $clinicas, $userDetalle->n_clinica, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('Perfiles') }}
            {{ Form::select('n_perfil', $perfiles, $userDetalle->n_perfil, ['class' => 'form-control']) }}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
