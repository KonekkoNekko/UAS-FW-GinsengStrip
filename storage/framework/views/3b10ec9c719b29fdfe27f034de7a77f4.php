<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container-fluid">
            <img src="<?php echo e(Vite::asset('resources/images/ginseng strip.png')); ?>" alt="" style="width: 7rem;">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-bag-fill"></h3></a></li>
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-cart"></h3></a></li>
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-person-circle"></h3></a></li>
            </ul>
        </div>
    </nav>
    <div class="d-flex justify-content-center">
        <img src="<?php echo e(Vite::asset('resources/images/mencuri.jpg')); ?>" alt="" style="width: 37rem;" class="m-5 px-5">
        <img src="<?php echo e(Vite::asset('resources/images/dicuri.jpg')); ?>" alt="" style="width: 37rem;" class="m-5 px-5">
    </div>

    <div class="d-flex justify-content-center ginseng">
        <div class="logo p-5 text-white">
            <img src="<?php echo e(Vite::asset('resources/images/ginseng strip.png')); ?>" alt="" style="width: 10rem;">
        </div>
        <div class="about p-5 text-white">
            GINSENG STRIP pertama kali didirikan pada tahun 2018. <br> Gagasan untuk menyediakan kaos band dari segala bentuk aspek <br> musik yang ada dan sedang populer. Di lain sisi kaos band ini <br> sedang meningkat di Indonesia pada beberapa tahun terakhir, <br> karena itu kami ingin membuat Ginseng Strip yang signifikan <br> secara skena musik dan culture dalam memulai usaha kami. <br> Alih-alih mengikuti tren, kami melawan arus dan mulai membuat <br> dan men-design kaos band dengan semenarik mungkin. Perjalanan <br> kami dimulai karena kami percaya dalam melestarikan <br> skena musik dan culture.
        </div>
    </div>
    <div class="d-flex" style="width: 40rem;">
        <img src="<?php echo e(Vite::asset('resources/images/big poppa.jpg')); ?>" alt="" class="img-thumbnail m-5">
        <img src="<?php echo e(Vite::asset('resources/images/welcome.jpg')); ?>" alt="" class="img-thumbnail m-5">
    </div>
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="d-flex text-center">
            <img src="<?php echo e(Vite::asset('resources/images/ginseng.png')); ?>" alt="" class="d-flex align-item-center" style="width: 2rem;">
        </div>
    </nav>
</body>
</html>
<?php /**PATH C:\Users\HP\Documents\Kuliah\SEMESTER4\framework\uas\UAS-FW-GinsengStrip\resources\views/customer/landingpage2.blade.php ENDPATH**/ ?>