<div class="d-flex">
    <a href="{{ route('productadms.show', $product->id) }}" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-person-lines-fill"></i>
    </a>
    <a href="{{ route('productadms.edit', $product->id) }}" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-pencil-square"></i>
    </a>
    <div>
        <form action="{{ route('productadms.destroy', $product->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="{{$product->product_album. ' - '.$product->product_artist}}">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
