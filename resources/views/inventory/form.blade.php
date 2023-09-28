<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('inv_type') }}
            {{ Form::text('inv_type', $inventory->inv_type, ['class' => 'form-control' . ($errors->has('inv_type') ? ' is-invalid' : ''), 'placeholder' => 'Inv Type']) }}
            {!! $errors->first('inv_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inv_description') }}
            {{ Form::text('inv_description', $inventory->inv_description, ['class' => 'form-control' . ($errors->has('inv_description') ? ' is-invalid' : ''), 'placeholder' => 'Inv Description']) }}
            {!! $errors->first('inv_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inv_quantity') }}
            {{ Form::text('inv_quantity', $inventory->inv_quantity, ['class' => 'form-control' . ($errors->has('inv_quantity') ? ' is-invalid' : ''), 'placeholder' => 'Inv Quantity']) }}
            {!! $errors->first('inv_quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inv_price') }}
            {{ Form::text('inv_price', $inventory->inv_price, ['class' => 'form-control' . ($errors->has('inv_price') ? ' is-invalid' : ''), 'placeholder' => 'Inv Price']) }}
            {!! $errors->first('inv_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>