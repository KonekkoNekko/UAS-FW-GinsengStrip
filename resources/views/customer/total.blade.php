@extends('layouts.app')

@section('navbar')
    @include('layouts.nav-middlelogo')
@endsection


@section('content')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container mb-5 text-center p-1 ">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="90">
            </a>
        </div>

        <div class="bg-secondary rounded px-5">
            <p class="text-center fw-bolder pt-4 text-white">TOTAL PAYMENT</p>
            <div class="container d-flex">
                <p class="mx-3 text-white">Product A/B/C</p>
                <p class="mx-3 text-white">IDR 200.000</p>
            </div>

            <div class="container d-flex">
                <p class="mx-3 text-white">Delivery Service</p>

                <p class="mx-3 text-white">IDR 8.500</p>
            </div>
            <hr class="text-white text-center" width="260">
            <div class="container d-flex justify-content-between">
                <p class="mx-3 text-white fw-bold">Total</p>

                <p class="mx-3 text-white">IDR 208.500</p>
            </div>
            <div class="container d-flex justify-content-between">
                <a href="{{ route('delivery.show') }}" class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Back</a>

                <button type="button" class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Next</button>
            </div>
        </div>
    </div>
@endsection
