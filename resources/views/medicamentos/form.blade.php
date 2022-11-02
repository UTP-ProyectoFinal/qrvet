<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre del Medicamento') }}
            {{ Form::text('v_nombre', $medicamento->v_nombre, ['class' => 'form-control' . ($errors->has('v_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Medicamento']) }}
            {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion breve del Medicamento') }}
            {{ Form::text('v_apuntes', $medicamento->v_apuntes, ['class' => 'form-control' . ($errors->has('v_apuntes') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion del Medicamento']) }}
            {!! $errors->first('v_apuntes', '<div class="invalid-feedback">:message</div>') !!}
        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
