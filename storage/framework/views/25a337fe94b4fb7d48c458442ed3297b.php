
<?php $__env->startSection('title', 'Sinau Code - Home'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
                <a href="<?php echo e(url('p/'.$latest_post->slug)); ?>">
                    <img class="card-img-top featured-img" src="<?php echo e(asset('storage/back/'. $latest_post->img)); ?>"
                        alt="..." />
                </a>
                <div class="card-body">
                    <div class="small text-muted"><?php echo e($latest_post->created_at->format('d-m-Y')); ?></div>
                    <h2 class="card-title"><?php echo e($latest_post->title); ?></h2>
                    <p class="card-text"><?php echo e(Str::limit(strip_tags($latest_post->desc),200 , '...')); ?></p>
                    <a class="btn btn-primary" href="<?php echo e(url('p/'.$latest_post->slug)); ?>">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <!-- Blog post-->
                    <div class="card mb-4 shadow">
                        <a href="<?php echo e(url('p/'.$item->slug)); ?>"><img class="card-img-top post-img"
                                src="<?php echo e(asset('storage/back/'. $item->img)); ?>" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted">
                                <?php echo e($item->created_at->format('d-m-Y')); ?>

                                <a href="<?php echo e(url('kategori/'. $item->Kategori->slug)); ?>"><?php echo e($item->Kategori->name); ?></a>
                            </div>
                            <h2 class="card-title h4"><?php echo e($item->title); ?></h2>
                            <p class="card-text"><?php echo e(Str::limit(strip_tags($item->desc),200 , '...')); ?></p>
                            <a class="btn btn-primary" href="<?php echo e(url('p/'.$item->slug)); ?>">Read more →</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="pagination justify-content-center my-4">
                <?php echo e($articles->links()); ?>

            </div>
        </div>
        <!-- Side widgets-->
        <?php echo $__env->make('front.layout.side-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/front/home/index.blade.php ENDPATH**/ ?>