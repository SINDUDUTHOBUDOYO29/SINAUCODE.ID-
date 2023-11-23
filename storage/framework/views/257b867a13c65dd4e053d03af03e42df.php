<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4 shadow">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="<?php echo e(route('search')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search articles..." />
                    <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div>

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span><a href="<?php echo e(url('kategori/'.$item->slug)); ?>"
                        class="bg-primary badge text-white unstyle-categories"><?php echo e($item->name); ?></a></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 shadow">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
            use, and feature the Bootstrap 5 card component!</div>
    </div>
</div><?php /**PATH C:\laragon\www\sinaucode\resources\views/front/layout/side-widget.blade.php ENDPATH**/ ?>