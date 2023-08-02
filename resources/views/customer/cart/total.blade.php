@extends('layouts.app')

@section('navbar')
    @include('layouts.nav-middlelogo')
@endsection


@section('content')
    {{-- {{ dd($deliveryData) }} --}}
    {{-- {{ dd($cartContent) }} --}}
    <p>{{ $cartContent }}</p>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="container mb-5 text-center p-1">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="90">
                </a>
            </div>

            <div class="card bg-light">
                <div class="card-body mx-4">
                    <div class="container">
                        <p class="align-self-center p-5 text-center" style="font-size: 30px;">Total Pembayaran</p>
                        <div class="row">
                            <ul class="list-unstyled">
                                <li class="text-black h4">Detail Pengiriman</li>
                                <li class="text-black">Nama Penerima: {{ $deliveryData['receiverName'] }}</li>
                                <li class="text-black">Alamat: {{ $deliveryData['address'] }}</li>
                                <li class="text-black">Jasa Pengiriman: {{ json_decode($exp)[0]->company }}</li>

                            </ul>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <p>Nama Kaos</p>
                            </div>
                            <div class="col-xl-2">
                                <p>Kuantitas</p>
                            </div>
                            <div class="col-xl-4 text-end">
                                Total Harga
                            </div>
                            <hr>
                        </div>
                        @foreach ($cartContent as $item)
                            <div class="row">
                                <div class="col-xl-6">
                                    <p>{{ $item->name }}</p>
                                </div>
                                <div class="col-xl-2">
                                    <p>{{ $item->qty }}</p>
                                </div>
                                <div class="col-xl-4 text-end">
                                    Rp.
                                    {{ number_format($item->price, 0, ',', '.') }}
                                </div>
                                <hr>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-xl-6">
                                <p>Biaya Pengiriman</p>
                            </div>
                            <div class="col-xl-2">
                                <p></p>
                            </div>
                            <div class="col-xl-4 text-end">
                                Rp.
                                {{ number_format(json_decode($exp)[0]->delivery_fee, 0, ',', '.') }}
                            </div>
                            <hr style="border: 2px solid black;">
                        </div>
                        <div class="row text-black">

                            <div class="col-xl-12">
                                <p class="float-end fw-bold">Rp.
                                    {{ number_format($totalPayment, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('payment.storetotal') }}">
                            @csrf
                            <div class="container d-flex justify-content-between">
                                <a href="{{ route('delivery.show') }}"
                                    class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Back</a>
                                <button type="submit" class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
