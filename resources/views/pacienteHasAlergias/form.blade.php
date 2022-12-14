<div class="box box-info padding-1">
    <div class="box-body">

        {{ Form::hidden('paciente_id', $paciente->id) }}

        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::text('a_n_user', ($cliente->v_nombre.' '.$cliente->v_apellido), ['readonly' => true, 'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        </div>
        <div class="form-group">
            {{ Form::label('Paciente') }}
            {{ Form::text('n_paciente', $paciente->v_nombre.' '.$paciente->v_apellido, ['readonly' => true, 'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        </div>

        <div class="form-group">
            {{ Form::label('Alergias') }}
            {{ Form::select('n_alergia', $alergia, null, ['class' => 'form-control']) }}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
