@extends('layouts.master')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p>Anda masuk sebagai {{ Auth::user()->name }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
