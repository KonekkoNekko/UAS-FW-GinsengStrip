<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Ginseng Strip</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <?php echo $__env->yieldContent('stylestuff'); ?>
</head>

<body class="bg-white">
    <div id="app">
        <?php
            $currentRouteName = Route::currentRouteName();
            $currentUrl = request()->url();
        ?>

        <?php echo $__env->yieldContent('navbar'); ?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php if($currentUrl == '' || $currentRouteName == 'beginning'): ?>

        <?php else: ?>
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

    </div>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('scriptstuff'); ?>
</body>

</html>
<?php /**PATH C:\Users\gfiqr\OneDrive\Documents\Framework\UAS\UAS-FW-GinsengStrip\resources\views/layouts/app.blade.php ENDPATH**/ ?>