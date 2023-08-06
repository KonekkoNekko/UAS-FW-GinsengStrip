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
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 mx-5">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <a href="{{ route('home') }}" class="btn btn-lg fs-1 my-1">
                            <i class="bi bi-arrow-left-circle"></i>
                        </a>
                    </div>
                    <div class="col-2 d-grid">
                    </div>
                </div>
            </div>
            <h1 class="display-3 text-center mb-5">Cart</h1>
            @foreach ($cartContent as $item)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="{{ asset('storage/products/' . $item->options->filename) }}"
                                class="img-fluid rounded-start" alt="{{ $item->options->filename }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->options->artist }}</p>
                                <p class="card-text"><small class="text-body-secondary">Rp.
                                        {{ number_format($item->price, 0, ',', '.') }}</small></p>
                            </div>
                        </div>
                        <div class="col-md-2 d-grid">
                            <div class="card-body">
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary minusBtn" type="button">-</button>
                                    <input type="number" class="form-control quantityInput" name="quantity"
                                        value="{{ $item->qty }}" min="0">
                                    <button class="btn btn-outline-secondary plusBtn" type="button">+</button>
                                </div>
                                <form action="{{ route('cart.delete', ['rowId' => $item->rowId]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-md mt-3">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-lg-9">
                    <h5><strong>Total Harga: </strong>
                        <h1> Rp. {{ number_format(Cart::total(), 0, ',', '.') }}</h1>
                    </h5>
                </div>
                <div class="col-lg-3 d-grid">
                    <a href="{{ route('delivery.show') }}"
                        class="btn btn-outline-primary btn-lg fs-2 align-self-center">
                        <i class="bi bi-bag-fill me-2"></i> Checkout
                    </a>
                </div>
            </div>
        </div>

        <footer class="page-footer fixed-bottom bg-secondary mt-5">
            <div class="container text-center p-1">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="30"
                        height="30">
                </a>
            </div>
        </footer>
    </div>

    <!--Footer-->


    <script>
        // Get all the elements with the specified classes
        const quantityInputs = document.querySelectorAll('.quantityInput');
        const minusButtons = document.querySelectorAll('.minusBtn');
        const plusButtons = document.querySelectorAll('.plusBtn');

        // Loop through each row and add event listeners to buttons
        for (let i = 0; i < minusButtons.length; i++) {
            minusButtons[i].addEventListener('click', function() {
                updateQuantity(quantityInputs[i], -1);
            });

            plusButtons[i].addEventListener('click', function() {
                updateQuantity(quantityInputs[i], 1);
            });
        }

        // Function to update the quantity and submit the form
        function updateQuantity(quantityInput, change) {
            // Calculate the updated quantity
            let updatedQuantity = parseInt(quantityInput.value) + change;

            // Ensure the input value is non-negative
            if (updatedQuantity < 0) {
                updatedQuantity = 0;
            }

            // Update the input value
            quantityInput.value = updatedQuantity;

            // Submit the form with the updated quantity
            quantityInput.closest('.updateForm').submit();
        }
    </script>
    @vite('resources/js/app.js')
</body>
