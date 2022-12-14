<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nro. de Identificación') }}
            {{ Form::text('v_identifica', $paciente->v_identifica, ['readonly' => true, 'class' => 'form-control' . ($errors->has('v_identifica') ? ' is-invalid' : ''), 'placeholder' => 'Nro. de Identificación']) }}
            {!! $errors->first('v_identifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Nombre de la mascota') }}
                    {{ Form::text('v_nombre', $paciente->v_nombre, ['class' => 'form-control' . ($errors->has('v_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la mascota']) }}
                    {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Apellido de la mascota') }}
                    {{ Form::text('v_apellido', $paciente->v_apellido, ['class' => 'form-control' . ($errors->has('v_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido de la mascota']) }}
                    {!! $errors->first('v_apellido', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Fecha de Nacimiento') }}
                    {{ Form::text('d_fecnaci', $paciente->d_fecnaci, ['class' => 'date form-control' . ($errors->has('d_fecnaci') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Nacimiento']) }}
                    {!! $errors->first('d_fecnaci', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Sexo') }}
                    {{ Form::select('n_sexo',$sexo, $paciente->n_sexo, ['class' => 'form-control' . ($errors->has('n_sexo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Sexo']) }}
                    {!! $errors->first('n_sexo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Raza') }}
                    {{ Form::select('n_raza',$raza, $paciente->n_raza, ['class' => 'form-control' . ($errors->has('n_raza') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la raza']) }}
                    {!! $errors->first('n_raza', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Dueño de mascota') }}
                    {{ Form::select('n_cliente',$cliente, $paciente->n_cliente, ['class' => 'form-control' . ($errors->has('n_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el cliente']) }}
                    {!! $errors->first('n_cliente', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>

<script type="text/javascript">
    $('.date').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>
