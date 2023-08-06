<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }

        img {
            height: 150px;
            width: 150px;
        }

        .tdimg {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Employee List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID.</th>
                <th>Product Name (Album - Artist)</th>
                <th>Product Price</th>
                <th>Product Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->product_album }} - {{ $product->product_artist }}</td>
                    <td>Rp. {{ number_format($product->product_price, 0, ',', '.') }}</td>
                    <td class="tdimg"><img src="data:image/png;base64,<?php echo base64_encode(file_get_contents(base_path('public/storage/products/' . $product->original_filename))); ?>"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
