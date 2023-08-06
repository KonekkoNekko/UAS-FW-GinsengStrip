<table>
    <thead>
        <tr>
            <th>ID.</th>
            <th>Product Name (Album - Artist)</th>
            <th>Product Price</th>
            <th>Product Photo Filename</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->product_album }} - {{ $product->product_artist }}</td>
                <td>Rp. {{ number_format($product->product_price, 0, ',', '.') }}</td>
                <td>{{ $product->original_filename }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
