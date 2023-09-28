<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mat_type') }}
            {{ Form::text('mat_type', $material->mat_type, ['class' => 'form-control' . ($errors->has('mat_type') ? ' is-invalid' : ''), 'placeholder' => 'Mat Type']) }}
            {!! $errors->first('mat_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mat_description') }}
            {{ Form::text('mat_description', $material->mat_description, ['class' => 'form-control' . ($errors->has('mat_description') ? ' is-invalid' : ''), 'placeholder' => 'Mat Description']) }}
            {!! $errors->first('mat_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mat_quantity') }}
            {{ Form::text('mat_quantity', $material->mat_quantity, ['class' => 'form-control' . ($errors->has('mat_quantity') ? ' is-invalid' : ''), 'placeholder' => 'Mat Quantity']) }}
            {!! $errors->first('mat_quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>