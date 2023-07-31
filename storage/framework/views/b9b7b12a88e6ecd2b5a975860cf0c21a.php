<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faq</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-md container-fluid">
        <div class="back">
            <h4 class="bi bi-arrow-left text-black container"></h4>
        </div>
    </nav>

    <div class="position-absolute top-50 start-50 translate-middle">
        <h3 class="fw-bolder text-center my-4">FAQ</h3>
        <div class="card-body bg-secondary py-5 rounded">
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">Where is shop catalog?</p>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">How to edit username?</p>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">How to checkout?</p>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">What the heck is GINSENG STRIP?</p>
        </div>
        <div class="d-flex justify-content-around">
            <p>Any Question?</p>
            <a href=""><button type="button" class="wa btn btn-sm rounded-pill"><i class="bi bi-whatsapp px-1"></i>Whatsapp</button></a>
        </div>

    </div>


    <footer class="page-footer fixed-bottom bg-secondary mt-5">
        <div class="container text-center p-1">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(Vite::asset('resources/images/cruzde.png')); ?>" alt="image" width="30" height="30">
            </a>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\HP\Documents\Kuliah\SEMESTER4\framework\uas\UAS-FW-GinsengStrip\resources\views/customer/faq.blade.php ENDPATH**/ ?>