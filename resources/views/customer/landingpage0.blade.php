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

    <div class="container text-center p-1 position-absolute top-50 start-50 translate-middle">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/images/cruzde.png') }}" alt="image" width="30" height="30">
        </a>
        <p class="mt-5">WELCOME TO</p>
        <div>
            <img src="{{ Vite::asset('resources/images/ginsengblack.png') }}" alt="image" width="170">
        </div>
    </div>

</body>
</html>
