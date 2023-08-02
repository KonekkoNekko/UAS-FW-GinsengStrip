@extends('layouts.app')

@section('navbar')
    @include('layouts.nav-middlelogo')
@endsection

@section('content')
    <div class="container d-flex mx-auto my-auto align-items-center align-content-center justify-content-center">
        <div class="col-md-6">
            <div id="map" style="height:800px;">

            </div>
        </div>
        <div class="col-md-6">
            <div class="p-5">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Your Delivery</h4>
                </div>
                <hr>
                <form method="POST" action="{{ route('delivery.store') }}">
                    @csrf
                    <div class="row text-start">
                        <div class="col-md-12 mb-3">
                            <label for="receiverName" class="form-label">Receiver's Name</label>
                            <input class="form-control @error('receiverName') is-invalid @enderror" type="text"
                                name="receiverName" id="receiverName"
                                value="{{ old('receiverName', $deliveryData['receiverName'] ?? '') }}"placeholder="Enter Receiver's Name">
                            @error('receiverName')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address"
                                id="address" value="{{ old('address', $deliveryData['address'] ?? '') }}" placeholder="Enter Address">
                            @error('address')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="coordinate" class="form-label">Coordinate</label>
                            <input class="form-control @error('coordinate') is-invalid @enderror" type="text"
                                name="coordinate" id="coordinate" value="{{ old('coordinate', $deliveryData['coordinate'] ?? '') }}"
                                placeholder="Added automatically on map's marker" readonly>
                            @error('coordinate')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Select Delivery</label>
                            <select name="expedition" id="expedition" class="form-select">
                                @foreach ($expeditions as $expedition)
                                    <option value="{{ $expedition->id }}" {{ old('expedition', $deliveryData['expedition'] ?? '') == $expedition->id ? 'selected' : '' }}>
                                        {{ $expedition->company }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('delivery.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('cart.show') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Back</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                    Next</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection

@section('scriptstuff')
    @vite('resources/js/leafletdeliver.js')
@endsection
