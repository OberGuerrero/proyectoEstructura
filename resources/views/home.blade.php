@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Crear botones -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('clients') }}" class="btn btn-primary">Clientes</a>
                        <a href="{{ route('inventories') }}" class="btn btn-primary">Inventario</a>
                        <a href="{{ route('materials') }}" class="btn btn-primary">Materiales</a>
                        <a href="{{ route('employees') }}" class="btn btn-primary">Empleados</a>
                        <a href="{{ route('orders') }}" class="btn btn-primary">Pedidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
