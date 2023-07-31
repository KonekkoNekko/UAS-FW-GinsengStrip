<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.nav-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center">
        <img src="<?php echo e(Vite::asset('resources/images/messi1.jpg')); ?>" alt="" style="width: 37rem;" class="m-5 px-5">
        <img src="<?php echo e(Vite::asset('resources/images/messi2.jpg')); ?>" alt="" style="width: 37rem;" class="m-5 px-5">
    </div>

    <div class="d-flex justify-content-center ginseng">
        <div class="logo p-5 text-white">
            <img src="<?php echo e(Vite::asset('resources/images/ginseng strip.png')); ?>" alt="" style="width: 10rem;">
        </div>
        <div class="about p-5 text-white">
            GINSENG STRIP pertama kali didirikan pada tahun 2018. <br> Gagasan untuk menyediakan kaos band dari segala
            bentuk aspek <br> musik yang ada dan sedang populer. Di lain sisi kaos band ini <br> sedang meningkat di
            Indonesia pada beberapa tahun terakhir, <br> karena itu kami ingin membuat Ginseng Strip yang signifikan <br>
            secara skena musik dan culture dalam memulai usaha kami. <br> Alih-alih mengikuti tren, kami melawan arus dan
            mulai membuat <br> dan men-design kaos band dengan semenarik mungkin. Perjalanan <br> kami dimulai karena kami
            percaya dalam melestarikan <br> skena musik dan culture.
        </div>
    </div>
    <div class="d-flex" style="width: 40rem;">
        <img src="<?php echo e(Vite::asset('resources/images/big poppa.jpg')); ?>" alt="" class="img-thumbnail m-5">
        <img src="<?php echo e(Vite::asset('resources/images/welcome.jpg')); ?>" alt="" class="img-thumbnail m-5">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/customer/landingpage2.blade.php ENDPATH**/ ?>