<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre del Procedimiento') }}
            {{ Form::text('v_nombre', $procedimiento->v_nombre, ['class' => 'form-control' . ($errors->has('v_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Procedimiento']) }}
            {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion breve del Procedimiento') }}
            {{ Form::text('v_apuntes', $procedimiento->v_apuntes, ['class' => 'form-control' . ($errors->has('v_apuntes') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion del Procedimiento']) }}
            {!! $errors->first('v_apuntes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Notificacion del Procedimiento') }}
            {{ Form::text('n_notifica', $procedimiento->n_notifica, ['class' => 'form-control' . ($errors->has('n_notifica') ? ' is-invalid' : ''), 'placeholder' => 'Notificacion']) }}
            {!! $errors->first('n_notifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
