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
    <div class="container text-center">
        <h1 style="margin-bottom: 20px; font-weight: bold;">Product</h1>
    </div>
    <div class="container justify-content-between mt-5">
        <div class="row mx-3 p-5">
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image" class="img-fluid" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--Footer-->
    <div id="footer" class="bg-secondary mt-5">
        <div class="container text-center p-1">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="30" height="30">
            </a>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

{{-- <table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>
    <?php $total = 0 ?>
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $details['price'] }}</td>
                <td data-th="Quantity">
                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                </td>
                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
    <tfoot>
    <tr class="visible-xs">
        <td class="text-center"><strong>Total {{ $total }}</strong></td>
    </tr>
    <tr>
        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
    </tr>
    </tfoot>
</table> --}}
