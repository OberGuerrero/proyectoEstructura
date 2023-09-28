@extends('layouts.app')

@section('template_title')
    {{ $inventory->name ?? "{{ __('Show') Inventory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Inv Type:</strong>
                            {{ $inventory->inv_type }}
                        </div>
                        <div class="form-group">
                            <strong>Inv Description:</strong>
                            {{ $inventory->inv_description }}
                        </div>
                        <div class="form-group">
                            <strong>Inv Quantity:</strong>
                            {{ $inventory->inv_quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Inv Price:</strong>
                            {{ $inventory->inv_price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
