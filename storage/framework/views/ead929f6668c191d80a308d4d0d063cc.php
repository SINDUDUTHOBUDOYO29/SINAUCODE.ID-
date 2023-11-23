<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Sinau Code" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldPushContent('meta-seo'); ?>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('front/img/favicon.ico')); ?>" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo e(asset('front/css/styles.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('front/css/custom.css')); ?>" rel="stylesheet" />
    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
    <!-- Responsive navbar-->
    <?php echo $__env->make('front.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-2">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Sinau Code.id</h1>
                <p class="lead mb-0">Belajar di Sinau Code dijamin Aman & Lancar</p>
            </div>
        </div>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; SinauCode 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo e(asset('front/js/scripts.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html><?php /**PATH C:\laragon\www\sinaucode\resources\views/front/layout/template.blade.php ENDPATH**/ ?>