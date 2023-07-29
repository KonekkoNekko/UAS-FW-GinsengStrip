<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container-fluid">
            <img src="{{ Vite::asset('resources/images/ginseng strip.png') }}" alt="" style="width: 7rem;">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-bag-fill"></h3></a></li>
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-cart"></h3></a></li>
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-person-circle"></h3></a></li>
            </ul>
        </div>
    </nav>
    <div class="d-flex justify-content-center">
        <img src="{{ Vite::asset('resources/images/messi1.jpg') }}" alt="" style="width: 37rem;" class="m-5 px-5">
        <img src="{{ Vite::asset('resources/images/messi2.jpg') }}" alt="" style="width: 37rem;" class="m-5 px-5">
    </div>

    <div class="d-flex justify-content-center ginseng">
        <div class="logo p-5 text-white">
            <img src="{{ Vite::asset('resources/images/ginseng strip.png') }}" alt="" style="width: 10rem;">
        </div>
        <div class="about p-5 text-white">
            GINSENG STRIP pertama kali didirikan pada tahun 2018. <br> Gagasan untuk menyediakan kaos band dari segala bentuk aspek <br> musik yang ada dan sedang populer. Di lain sisi kaos band ini <br> sedang meningkat di Indonesia pada beberapa tahun terakhir, <br> karena itu kami ingin membuat Ginseng Strip yang signifikan <br> secara skena musik dan culture dalam memulai usaha kami. <br> Alih-alih mengikuti tren, kami melawan arus dan mulai membuat <br> dan men-design kaos band dengan semenarik mungkin. Perjalanan <br> kami dimulai karena kami percaya dalam melestarikan <br> skena musik dan culture.
        </div>
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
