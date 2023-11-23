

<?php $__env->startSection('title', $article->title . '- Sinau Code'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
                <a href="<?php echo e(url('p/'.$article->slug)); ?>">
                    <img class="card-img-top single-img" src="<?php echo e(asset('storage/back/'. $article->img)); ?>"
                        alt="<?php echo e($article->title); ?>" />
                </a>
                <div class="card-body">
                    <div class="small text-muted">
                        <span class="ml-2"><?php echo e($article->created_at->format('d-m-Y')); ?></span>
                        <span class="ml-2"><?php echo e($article->Kategori->name); ?></span>
                        <span class="ml-2"><?php echo e($article->views); ?></span>
                    </div>
                    <h2 class="card-title"><?php echo e($article->title); ?></h2>
                    <p class="card-text"><?php echo $article->desc; ?></p>

                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <?php echo $__env->make('front.layout.side-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/front/article/show.blade.php ENDPATH**/ ?>