<nav class="navbar navbar-expand-md bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="<?php echo e(__('Toggle navigation')); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <img src="<?php echo e(Vite::asset('resources/images/ginseng strip.png')); ?>" alt=""
                style="width: 7rem;">
            </ul>

            <ul class="navbar-nav ms-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('login')); ?>"
                                class="nav-link text-black bg-white rounded">Login</a></li>
                    <?php endif; ?>
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item col-2 col-md-auto mx-3"><a href="<?php echo e(route('register')); ?>"
                                class="nav-link text-black bg-white rounded">Register</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item col-2 col-md-auto mx-2"><a href="<?php echo e(route('product')); ?>" class="nav-link text-white">
                            <h3 class="bi bi-bag-fill"></h3>
                        </a></li>
                    <li class="nav-item col-2 col-md-auto mx-2"><a href="<?php echo e(route('cart.show')); ?>" class="nav-link text-white">
                            <h3 class="bi bi-cart"></h3>
                        </a></li>
                    <li class="nav-item dropdown col-2 col-md-auto mx-2">
                        <a href="" class="nav-link text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h3 class="bi bi-person-circle"></h3>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">
                                Profile
                            </a>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>


                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item col-2 col-md-auto mx-2"><</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\FemWokPurp\UAS-Hub\UAS-FW-GinsengStrip\resources\views/layouts/nav-auth.blade.php ENDPATH**/ ?>