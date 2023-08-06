<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    {{-- Katalog Produk --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mx-5">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <a href="{{ route('home') }}" class="btn btn-lg fs-1 my-1">
                            <i class="bi bi-arrow-left-circle"></i>
                        </a>
                    </div>
                    <div class="col-2 d-grid">
                        <a href="{{ route('cart.show') }}" class="btn btn-outline-secondary btn-lg fs-3 my-3 fw-medium">
                            <i class="bi bi-bag-fill me-2"></i>
                            {{ Cart::instance(auth()->user()->username)->count() }}
                        </a>
                    </div>
                </div>
                <h1 class="display-3 text-center mb-5">Product</h1>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-thumbnail"
                                    src="{{ asset('storage/products/' . $product->original_filename) }}"
                                    alt="{{$product->original_filename}}" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->product_album }}</h5>
                                    <p class="card-text">{{ $product->product_artist }}</p>
                                    <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="page-footer fixed-bottom bg-secondary mt-5">
        <div class="container text-center p-1">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="30"
                    height="30">
            </a>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
