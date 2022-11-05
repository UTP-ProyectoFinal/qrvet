<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::select('n_cliente',$cliente, $atencion->v_nombre, ['class' => 'form-control' . ($errors->has('n_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Cliente']) }}
            {!! $errors->first('n_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paciente') }}
            {{ Form::select('n_paciente',$paciente, $atencion->v_nombre, ['class' => 'form-control' . ($errors->has('n_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Paciente']) }}
            {!! $errors->first('n_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vacuna') }}
            {{ Form::select('n_vacuna', $vacuna, $atencion->v_nombre, ['class' => 'form-control' . ($errors->has('n_vacuna') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Vacuna']) }}
            {!! $errors->first('n_vacuna', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
