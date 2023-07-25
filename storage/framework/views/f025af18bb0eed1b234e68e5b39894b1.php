<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container-fluid">
            <img src="<?php echo e(Vite::asset('resources/images/ginseng strip.png')); ?>" alt="" style="width: 7rem;">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link text-black bg-white rounded">Login</a></li>
                <li class="nav-item col-2 col-md-auto mx-3"><a href="" class="nav-link text-black bg-white rounded">Register</a></li>
            </ul>
        </div>
    </nav>
    <div class="d-flex" style="width: 40rem;">
        <img src="<?php echo e(Vite::asset('resources/images/mencuri.jpg')); ?>" alt="" class="img-thumbnail m-5">
        <img src="<?php echo e(Vite::asset('resources/images/dicuri.jpg')); ?>" alt="" class="img-thumbnail m-5">
    </div>
    <div class="d-flex" style="width: 40rem;">
        <img src="<?php echo e(Vite::asset('resources/images/big poppa.jpg')); ?>" alt="" class="img-thumbnail m-5">
        <img src="<?php echo e(Vite::asset('resources/images/welcome.jpg')); ?>" alt="" class="img-thumbnail m-5">
    </div>

    <nav class="navbar navbar-expand-md bg-dark">
        <div class="d-flex align-item-center">
            <img src="<?php echo e(Vite::asset('resources/images/ginseng.png')); ?>" alt="" class="d-flex align-item-center" style="width: 2rem;">
        </div>
    </nav>
</body>
</html>
<?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/landingpage1.blade.php ENDPATH**/ ?>