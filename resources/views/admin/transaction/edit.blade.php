@extends('layouts.master')
@section('content')
    <div class="card rounded-4">
        <div class="row g-0 ">
            <div class="col-md-6">
                <div id="map" style="height:800px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body" style="max-height: 800px; overflow-y: auto;">
                    <div class="p-5">
                        <h1 class="display-5">Data Transaksi</h1>
                        <dl class="row mt-3">
                            <hr>
                            <dt class="col-md-3 ">Customer Name</dt>
                            <dd class="col-md-9 ">{{ $transaction->cust_name }}</dd>
                            <hr>
                            <dt class="col-md-3 ">Cart Items</dt>
                            <dd class="col-md-9 ">
                                @foreach ($transaction->cart as $item)
                                    {{ $item['name'] }} - {{ $item['options']['artist'] }} : {{ $item['qty'] }} pcs -
                                    Rp. {{ number_format($item['price'], 0, ',', '.') }}
                                    <br>
                                @endforeach
                            </dd>
                            <hr>
                            <dt class="col-md-3 ">Total Transaction</dt>
                            <dd class="col-md-9 ">Rp. {{ number_format($transaction->total_transaction, 0, ',', '.') }}</dd>
                            <hr>
                            <dt class="col-md-3 ">Payment Method</dt>
                            <dd class="col-md-9 ">{{ $transaction->payment_method }}</dd>
                            <hr>
                            <dt class="col-md-3 ">Payment Bank</dt>
                            <dd class="col-md-9 ">{{ $transaction->payment->code }} - {{ $transaction->payment->bank }} -
                                {{ $transaction->payment->account_num }}</dd>
                            <hr>
                            <dt class="col-md-3">Address</dt>
                            <dd class="col-md-9">{{ $transaction->address }}</dd>
                            <hr>
                            <dt class="col-md-3">Expedition Company</dt>
                            <dd class="col-md-9">{{ $transaction->expedition->company }}</dd>
                            <hr>
                            <dt class="col-md-3">Transaction Status</dt>
                            <dd class="col-md-9">
                                <form action="{{ route('transc.update', ['id' => $transaction->id]) }}" method="POST">
                                    @csrf
                                    {{-- @method('PUT') --}}
                                    <select name="statustransc" id="statustransc" class="form-select"
                                        onchange="this.form.submit()">
                                        @php
                                            $selected = '';
                                            if ($errors->any()) {
                                                $selected = old('statustransc');
                                            } else {
                                                $selected = $transaction->pay_statuses_id;
                                            }
                                        @endphp
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}"
                                                {{ $selected == $status->id ? 'selected' : '' }}>
                                                {{ $status->status }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </dd>
                            <hr>
                            <dt class="col-md-3">Payment Proof</dt>
                            <dd class="col-md-9">
                                <img src="{{ asset('/storage/payproof/' . $transaction->encrypted_filename) }}"
                                    alt=":(" class="img-fluid">

                                {{ $transaction->encrypted_filename }}
                            </dd>
                            <hr>
                        </dl>
                        <div class="row">
                            <div class="col-md-4 d-grid">
                                <a href="{{ route('transc.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                                    <i class="bi-arrow-left-circle me-2"></i> Kembali
                                </a>
                            </div>
                            <div class="col-md-4 d-grid">
                                <a href="{{ route('openGoogleMaps', ['coordinate' => $transaction->coordinate]) }}"
                                    class="btn btn-outline-primary btn-lg mt-3">
                                    <i class="bi bi-geo-fill"></i> Google Map
                                </a>
                            </div>
                            <div class="col-md-4 d-grid">
                                <form method="POST" action="{{ route('transc.delete', ['id' => $transaction->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-lg mt-3 w-100">
                                        <i class="bi bi-trash-fill me-2"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-grid">

                            </div>
                            <div class="col-md-6 d-grid"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var coord = "{{ $transaction->coordinate }}";
    </script>
@endsection

@push('scripts')
    <script type="module">
        @vite('resources/js/leafletshow.js')
    </script>
@endpush
