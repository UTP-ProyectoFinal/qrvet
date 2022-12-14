<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre de la Raza') }}
            {{ Form::text('v_nombre', $raza->v_nombre, ['class' => 'form-control' . ($errors->has('v_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Raza']) }}
            {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion breve de la Raza') }}
            {{ Form::text('v_apuntes', $raza->v_apuntes, ['class' => 'form-control' . ($errors->has('v_apuntes') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion de la Raza']) }}
            {!! $errors->first('v_apuntes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especie') }}
            {{ Form::select('n_especie',$especie,$raza->n_especie, ['class' => 'form-control' . ($errors->has('n_especie') ? ' is-invalid' : ''), 'placeholder' => 'Especie']) }}
            {!! $errors->first('n_especie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
