<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_clients') }}
            {{ Form::text('id_clients', $order->id_clients, ['class' => 'form-control' . ($errors->has('id_clients') ? ' is-invalid' : ''), 'placeholder' => 'Id Clients']) }}
            {!! $errors->first('id_clients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_employees') }}
            {{ Form::text('id_employees', $order->id_employees, ['class' => 'form-control' . ($errors->has('id_employees') ? ' is-invalid' : ''), 'placeholder' => 'Id Employees']) }}
            {!! $errors->first('id_employees', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ord_type') }}
            {{ Form::text('ord_type', $order->ord_type, ['class' => 'form-control' . ($errors->has('ord_type') ? ' is-invalid' : ''), 'placeholder' => 'Ord Type']) }}
            {!! $errors->first('ord_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ord_description') }}
            {{ Form::text('ord_description', $order->ord_description, ['class' => 'form-control' . ($errors->has('ord_description') ? ' is-invalid' : ''), 'placeholder' => 'Ord Description']) }}
            {!! $errors->first('ord_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ord_request') }}
            {{ Form::text('ord_request', $order->ord_request, ['class' => 'form-control' . ($errors->has('ord_request') ? ' is-invalid' : ''), 'placeholder' => 'Ord Request']) }}
            {!! $errors->first('ord_request', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ord_delivery') }}
            {{ Form::text('ord_delivery', $order->ord_delivery, ['class' => 'form-control' . ($errors->has('ord_delivery') ? ' is-invalid' : ''), 'placeholder' => 'Ord Delivery']) }}
            {!! $errors->first('ord_delivery', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>