@extends('layouts.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive border p-3 rounded-4 mb-5 bg-light">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="transTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Cart</th>
                            <th>Total Transaction</th>
                            <th>Payment Method</th>
                            <th>Bank Destination</th>
                            <th>Address</th>
                            <th>Expedition</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->cust_name }}</td>
                                <td>
                                    @foreach ($transaction->cart as $item)
                                        {{ $item['name'] }} - {{ $item['options']['artist'] }} : {{ $item['qty'] }} pcs -
                                        {{ $item['price'] }}
                                        <br>
                                    @endforeach
                                </td>
                                <td>Rp. {{ number_format($transaction->total_transaction, 0, ',', '.') }}</td>
                                <td>{{ $transaction->payment_method }}</td>
                                <td>{{ $transaction->payment->bank }}</td>
                                <td>{{ $transaction->address }}</td>
                                <td>{{ $transaction->expedition->company }}</td>
                                <td>{{ $transaction->payStatus->status }}</td>
                                <td>@include('admin.transaction.action')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $('#transTable').DataTable();
        });
    </script>
@endpush
