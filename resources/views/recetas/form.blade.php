<div class="box box-info padding-1">
    <div class="box-body">

        {{ Form::hidden('n_atencion', $id) }}

        <div class="form-group">
            {{ Form::label('Medicamento') }}
            {{ Form::select('n_medica', $medicamentos, $receta->n_medica, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('n_cantidad', $receta->n_cantidad, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        </div>

        <div class="form-group">
            {{ Form::label('Dosis') }}
            {{ Form::text('v_dosis', $receta->v_dosis, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
