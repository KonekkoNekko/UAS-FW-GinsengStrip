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

    {{-- Cart Catalog --}}
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#"><i class="bi bi-arrow-left-circle display-5"></i></a>
        </div>
    </nav>

    <div class="container text-center">
        <h1 style="margin-bottom: 20px; font-weight: bold;">Cart</h1>
    </div>
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="{{ Vite::asset('resources/images/bauhaus.png') }}" class="img-thumbnail rounded-start"
                        alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <input type="number" class="form-control text-center" value="1">
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="{{ Vite::asset('resources/images/bauhaus.png') }}" class="img-thumbnail rounded-start"
                        alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <input type="number" class="form-control text-center" value="1">
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="{{ Vite::asset('resources/images/bauhaus.png') }}" class="img-thumbnail rounded-start"
                        alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <input type="number" class="form-control text-center" value="1">
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>
                    Checkout </a>
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
