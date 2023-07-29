<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-md bg-dark container-fluid">
        <div class="">
            <i class="bi bi-arrow-left text-white container"></i>
            <img src="<?php echo e(Vite::asset('resources/images/ginseng strip.png')); ?>" alt="" style="width: 7rem;">
        </div>
    </nav>

    <div class="card bg-dark position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body d-flex flex-column align-items-center">
        <img src="<?php echo e(Vite::asset('resources/images/kepin.png')); ?>" class="card-img-top rounded-circle py-4" alt="..." style="width: 7rem;">
        </div>
        <div class="card-body bg-secondary">
            <h5 class="text-white fw-bold text-center py-3 ">YOUR PROFILE</h5>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">Kevin Surya</p>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">huditara@gmail.com</p>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">082244582243</p>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">Candi Lontar Wetan 42G, 6/10</p>
          <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">40216</p>
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
<?php /**PATH C:\Users\HP\Documents\Kuliah\SEMESTER4\framework\uas\UAS-FW-GinsengStrip\resources\views/customer/profile.blade.php ENDPATH**/ ?>