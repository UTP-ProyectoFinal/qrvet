<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre de la Alergia') }}
            {{ Form::text('v_nombre', $alergia->v_nombre, ['class' => 'form-control' . ($errors->has('v_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Alergia']) }}
            {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion breve de la alergia') }}
            {{ Form::text('v_apuntes', $alergia->v_apuntes, ['class' => 'form-control' . ($errors->has('v_apuntes') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion de la Alergia']) }}
            {!! $errors->first('v_apuntes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
