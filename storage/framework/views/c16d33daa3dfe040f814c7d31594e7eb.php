

<?php $__env->startSection('title', 'Kategori '. $category . '- Sinau Code'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page content-->
<div class="container">
    <div class="mb-3">
        <form action="<?php echo e(route('search')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="input-group">
                <input class="form-control" type="text" name="keyword" placeholder="Search articles..." />
                <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <p>Showing articles with Category : <b><?php echo e($category); ?></b></p>

    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-4">
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3>Not found</h3>
        <?php endif; ?>
    </div>

    <?php echo e($articles->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/front/category/index.blade.php ENDPATH**/ ?>