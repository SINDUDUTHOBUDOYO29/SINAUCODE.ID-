
<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
                <a href="<?php echo e(asset('front/img/vs-code-logo.jpg')); ?>">
                    <img class="card-img-top featured-img" src="<?php echo e(asset('front/img/vs-code-logo.jpg')); ?>" alt="..." />
                </a>
                <div class="card-body">
                    <div class="small text-muted"><?php echo e(date('d/m/Y')); ?></div>
                    <h2 class="card-title">About Sinau Code</h2>
                    <p class="card-text">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo, necessitatibus maxime
                        reiciendis saepe laborum hic, quaerat corrupti cum eaque sapiente sequi consectetur ea est
                        facere doloribus quisquam aut aspernatur.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ratione sed et optio expedita.
                        Neque quo nisi, fuga aspernatur esse id distinctio quidem. Ducimus nemo deserunt dicta voluptate
                        vitae pariatur!
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dicta, fugiat officiis dolor
                        voluptatem neque beatae, libero repudiandae voluptatibus blanditiis labore voluptates animi
                        impedit magni quod nisi, molestiae numquam reiciendis.
                    </p>

                    </p>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->

        </div>
        <!-- Side widgets-->
        <?php echo $__env->make('front.layout.side-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/front/home/about.blade.php ENDPATH**/ ?>