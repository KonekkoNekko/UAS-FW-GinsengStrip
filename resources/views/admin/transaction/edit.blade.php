@extends('layouts.master')
@section('content')
{{-- @vite('resources/js/transaction.js'); --}}
Belum ade apaapa
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="table-responsive border p-3 rounded-3 mb-5">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="transTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Cart</th>
                            <th>Total Transaction</th>
                            <th>Payment Method</th>
                            <th>Address</th>
                            <th>Expedition</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->cust_name }}</td>
                                <td>{{ json_encode($transaction->cart) }}</td>
                                <td>{{ $transaction->total_transaction }}</td>
                                <td>{{ $transaction->payment_method }}</td>
                                <td>{{ $transaction->payment->bank }}</td>
                                <td>@include('admin.transaction.action')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
@endsection

@section('')
@push('scripts')
    {{-- @vite('resources/js/transaction.js') --}}
    <script type="module">
        $(document).ready(function() {
            $('#transTable').DataTable();
        });
    </script>

@endpush
