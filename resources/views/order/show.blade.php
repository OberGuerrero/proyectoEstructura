@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? "{{ __('Show') Order" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Clients:</strong>
                            {{ $order->id_clients }}
                        </div>
                        <div class="form-group">
                            <strong>Id Employees:</strong>
                            {{ $order->id_employees }}
                        </div>
                        <div class="form-group">
                            <strong>Ord Type:</strong>
                            {{ $order->ord_type }}
                        </div>
                        <div class="form-group">
                            <strong>Ord Description:</strong>
                            {{ $order->ord_description }}
                        </div>
                        <div class="form-group">
                            <strong>Ord Request:</strong>
                            {{ $order->ord_request }}
                        </div>
                        <div class="form-group">
                            <strong>Ord Delivery:</strong>
                            {{ $order->ord_delivery }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
