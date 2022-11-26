<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Tipo Documento') }}
                    {{ Form::select('n_tipodoc',$tipo, $cliente->n_tipodoc, ['class' => 'form-control' . ($errors->has('n_tipodoc') ? ' is-invalid' : ''), 'placeholder' => 'DNI, CE, ó Pasaporte']) }}
                    {!! $errors->first('n_tipodoc', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Nro. Documento') }}
                    {{ Form::text('n_documento', $cliente->n_documento, ['class' => 'form-control' . ($errors->has('n_documento') ? ' is-invalid' : ''), 'placeholder' => 'N° de documento del cliente']) }}
                    {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Nombre del cliente') }}
                    {{ Form::text('v_nombre', $cliente->v_nombre, ['class' => 'form-control' . ($errors->has('v_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del cliente']) }}
                    {!! $errors->first('v_nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Apellido del cliente') }}
                    {{ Form::text('v_apellido', $cliente->v_apellido, ['class' => 'form-control' . ($errors->has('v_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido del cliente']) }}
                    {!! $errors->first('v_apellido', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Correo electrónico') }}
                    {{ Form::text('v_correo', $cliente->v_correo, ['class' => 'form-control' . ($errors->has('v_correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo electronico']) }}
                    {!! $errors->first('v_correo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Telefono Celular') }}
                    {{ Form::text('v_telefono', $cliente->v_telefono, ['class' => 'form-control' . ($errors->has('v_telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Celular']) }}
                    {!! $errors->first('v_telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Telefono Fijo') }}
                    {{ Form::text('v_telfijo', $cliente->v_telfijo, ['class' => 'form-control' . ($errors->has('v_telfijo') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Fijo']) }}
                    {!! $errors->first('v_telfijo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
