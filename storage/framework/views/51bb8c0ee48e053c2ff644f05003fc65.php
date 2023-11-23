<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('front/img/icons8-system-coding-53.png')); ?>" alt="" width="50" height="50">
            <strong>Sinau Code</strong>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/articles')); ?>">Artikel</a></li>

                <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/about')); ?>">About</a></li>
                
                
                <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>" class="nav-link active">Home</a>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="nav-link active">Log in</a>

                <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>" class="nav-link active">Register</a>
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\sinaucode\resources\views/front/layout/navbar.blade.php ENDPATH**/ ?>