@extends('layouts.master')
@section('content')
    {{-- @vite('resources/js/productadm.js') --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row mb-3">
                <div class="col-lg-9 col-xl-6">
                    <h4 class="">{{ $pageTitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-6">
                    <ul class="list-inline mb-0 float-end">
                        <li class="list-inline-item">
                            <a href="{{ route('productadms.exportExcel') }}" class="btn btn-outline-success">
                                <i class="bi bi-download me-1"></i> to Excel
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('productadms.exportPdf') }}" class="btn btn-outline-danger">
                                <i class="bi bi-download me-1"></i> to PDF
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('productadms.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i> Add Product
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive border p-3 rounded-3 bg-light">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="productTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name (Album - Artist)</th>
                            <th class="w-25">Product Price</th>
                            <th class="text-center">Product Photo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_album }} - {{ $product->product_artist }}</td>
                                <td>Rp. {{ number_format($product->product_price, 0, ',', '.') }}</td>
                                <td class="text-center"><img
                                        src="{{ asset('/storage/products/' . $product->original_filename) }}" alt=":("
                                        class="img-thumbnail w-50 h-50"></td>
                                <td>@include('admin.productadms.action')</td>
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
            $('#productTable').DataTable();
        });
        $(".datatable").on("click", ".btn-delete", function(e) {
            e.preventDefault();

            var form = $(this).closest("form");
            var name = $(this).data("name");

            Swal.fire({
                title: "Are you sure want to delete \n" + name + "?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonClass: "bg-primary",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endpush
