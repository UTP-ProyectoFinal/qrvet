<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre de la Vacuna') }}
            {{ Form::text('v_nombre', $vacuna->v_nombre, ['class' => 'form-control' . ($errors->has('v_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Vacuna']) }}
            {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion breve de la vacuna') }}
            {{ Form::text('v_apuntes', $vacuna->v_apuntes, ['class' => 'form-control' . ($errors->has('v_apuntes') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion de la Vacuna']) }}
            {!! $errors->first('v_apuntes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Expiracion') }}
            {{ Form::text('n_expira', $vacuna->n_expira, ['class' => 'form-control' . ($errors->has('n_expira') ? ' is-invalid' : ''), 'placeholder' => 'Expiracion de la Vacuna']) }}
            {!! $errors->first('n_expira', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
