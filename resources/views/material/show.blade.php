@extends('layouts.app')

@section('template_title')
    {{ $material->name ?? "{{ __('Show') Material" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Material</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mat Type:</strong>
                            {{ $material->mat_type }}
                        </div>
                        <div class="form-group">
                            <strong>Mat Description:</strong>
                            {{ $material->mat_description }}
                        </div>
                        <div class="form-group">
                            <strong>Mat Quantity:</strong>
                            {{ $material->mat_quantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
