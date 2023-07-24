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
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#"><i class="bi bi-arrow-left-circle display-5"></i></a>
        </div>
    </nav>
    <div class="container text-center">
        <h1 style="margin-bottom: 20px; font-weight: bold;">Product</h1>
    </div>
    <div class="container justify-content-between mt-5">
        <div class="row mx-3 p-5">
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card text-center" style="width: 18rem;">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/bauhaus.png') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--Footer-->
    <footer class="page-footer bg-secondary mt-5">
        <div class="container text-center p-1">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="30"
                    height="30">
            </a>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
