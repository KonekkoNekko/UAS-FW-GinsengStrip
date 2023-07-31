<nav class="navbar navbar-expand-md bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-tem col-2 col-md-auto mx-2">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link">
                        <i class="bi bi-arrow-left text-white container"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav mx-auto">
                <li class="nav-tem col-2 col-md-auto mx-2">
                    <img src="<?php echo e(Vite::asset('resources/images/ginseng strip.png')); ?>" alt=""
                        style="width: 7rem;">
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-tem col-2 col-md-auto mx-2">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right text-danger"></i>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/layouts/nav-back-logout.blade.php ENDPATH**/ ?>