@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        You are a Customer User.
                    </div>

                    <div class="d-flex p-2">
                        <a href="{{ route('product') }}" class="btn btn-primary">Produk</a>
                        <a href="{{ route('cart.show') }}" class="btn btn-primary">Cart</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
