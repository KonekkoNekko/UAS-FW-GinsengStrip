<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container-fluid">
            <img src="{{ Vite::asset('resources/images/ginseng strip.png') }}" alt="" style="width: 7rem;">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link text-black bg-white rounded">Login</a></li>
                <li class="nav-item col-2 col-md-auto mx-3"><a href="" class="nav-link text-black bg-white rounded">Register</a></li>
            </ul>
        </div>
    </nav>
    <div class="d-flex" style="width: 40rem;">
        <img src="{{ Vite::asset('resources/images/mencuri.jpg') }}" alt="" class="img-thumbnail m-5">
        <img src="{{ Vite::asset('resources/images/dicuri.jpg') }}" alt="" class="img-thumbnail m-5">
    </div>
    <div class="d-flex" style="width: 40rem;">
        <img src="{{ Vite::asset('resources/images/big poppa.jpg') }}" alt="" class="img-thumbnail m-5">
        <img src="{{ Vite::asset('resources/images/welcome.jpg') }}" alt="" class="img-thumbnail m-5">
    </div>

    <footer class="page-footer fixed-bottom bg-secondary mt-5">
        <div class="container text-center p-1">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="30"
                    height="30">
            </a>
        </div>
    </footer>
</body>
</html>
