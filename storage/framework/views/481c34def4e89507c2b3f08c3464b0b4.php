<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Admin</title>
    <!-- Link Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/admin.scss', 'resources/css/style.css', 'resources/js/admin.js']); ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <!-- Add this to your HTML header section -->

    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

</head>

<body>
    <div class="sidebar">
        <div class="logo_details">
            <i class="bi bi-amd icon"></i>
            <div class="logo_name">Ginseng Strip</div>
            <i class="bi bi-list" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="<?php echo e(route('admin')); ?>">
                    <i class="bi bi-grid-fill"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="<?php echo e(route('productadms.index')); ?>">
                    <i class="bi bi-cart3"></i>
                    <span class="link_name">Product</span>
                </a>
                <span class="tooltip">Product</span>
            </li>
            <li>
                <a href="<?php echo e(route('transc.index')); ?>">
                    <i class="bi bi-cash-coin"></i>
                    <span class="link_name">Transaksi</span>
                </a>
                <span class="tooltip">Transaksi</span>
            </li>
            <li class="profile">
                <div class="profile_details">
                    <div class="profile_content">
                        <div class="name"><?php echo e(Auth::user()->name); ?></div>
                        <div class="designation">Admin</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>

                <script>
                    document.getElementById('log_out').addEventListener('click', function() {
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                    });
                </script>

            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>

        <main class="m-3">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </section>
    <!-- Scripts -->
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/layouts/master.blade.php ENDPATH**/ ?>