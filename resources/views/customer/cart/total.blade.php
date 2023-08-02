@extends('layouts.app')

@section('navbar')
    @include('layouts.nav-middlelogo')
@endsection

@section('stylestuff')
    <style>
        #qrisContainer,
        #bankContainer {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="container mb-5 text-center p-1">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="90">
                </a>
            </div>
            <div class="row">
                <div class="col-md-6">
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
                                <div class="container d-flex justify-content-center">
                                    <a href="{{ route('delivery.show') }}"
                                        class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Back</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ route('payment.storetotal') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h3 class="align-self-center pt-5 text-center">Pilih Pembayaran</h3>
                                <select name="methodpay" id="methodpay" class="form-select bg-white" value="">
                                    <option value=""></option>
                                    <option value="qris">QRIS</option>
                                    <option value="bank">Transfer Bank</option>
                                </select>


                                <div id="qrisContainer" class="p-3">
                                    <div class="row text-center justify-content-center">
                                        <h4 class="my-3">Silahkan Scan</h4>
                                        <img src="{{ Vite::asset('resources/images/qris.png') }}" alt=""
                                            class="img-thumbnail" style="height: 350px; width: 350px;">
                                    </div>
                                </div>

                                <div id="bankContainer" class="p-3">
                                    <div class="row text-center justify-content-center">
                                        <h4 class="my-3">Silahkan Isi Dulu</h4>
                                        <label for="payment" class="form-label mt-2 text-start">Bank Destination</label>
                                        <select name="payment" id="payment" class="form-select">
                                            @foreach ($paymentBank as $bank)
                                                <option value="{{ $bank->id }}"
                                                    {{ old('bank') == $bank->id ? 'selected' : '' }}>
                                                    {{ $bank->code . ' - ' . $bank->bank . ' - ' . $bank->account_num }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="bankorigin" class="form-label mt-2 text-start">Bank Origin</label>
                                        <input type="text" id="bankorigin" class="form-control bg-white"
                                            placeholder="Enter Your Bank Origin">
                                        <label for="bankaccount" class="form-label mt-2 text-start">Bank Account's
                                            number</label>
                                        <input type="text" id="bankaccount" class="form-control bg-white"
                                            placeholder="Enter Your Bank Account's number">
                                    </div>
                                </div>

                                <div class="col-md-12 my-3">
                                    <label for="payfile" class="form-label text-center">Send the Proof of Payment</label>
                                    <input type="file" class="form-control bg-white" name="payfile" id="payfile">
                                </div>
                                <div class="container d-flex justify-content-center">
                                    <button type="submit" class="tombol btn btn-sm px-5 mx-3 mb-4 text-white">Next</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection

@section('scriptstuff')
    <script>
        <!-- Update the ID to 'methodpay' 
        -->
        document.getElementById('methodpay').addEventListener('change',
        function()
        {
        var
        selectedValue
        =
        this.value;
        var
        qrisContainer
        =
        document.getElementById('qrisContainer');
        var
        bankContainer
        =
        document.getElementById('bankContainer');
        if
        (selectedValue
        ===
        '')
        {
        qrisContainer.style.display
        =
        'none';
        bankContainer.style.display
        =
        'none';
        }
        else
        if
        (selectedValue
        ===
        'qris')
        {
        qrisContainer.style.display
        =
        'block';
        bankContainer.style.display
        =
        'none';
        }
        else
        if
        (selectedValue
        ===
        'bank')
        {
        qrisContainer.style.display
        =
        'none';
        bankContainer.style.display
        =
        'block';
        }
        });

    </script>
@endsection
