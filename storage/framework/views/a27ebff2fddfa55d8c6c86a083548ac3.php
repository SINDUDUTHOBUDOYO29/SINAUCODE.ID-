

<?php $__env->startSection('title', 'Dashboard - Admin'); ?>

<?php $__env->startSection('content'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card text-bg-primary mb-3" style="max-width: 100%;">
                <div class="card-header">Total Artikel</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($total_artikel); ?> Artikel</h5>
                    <p class="card-text">
                        <a href="<?php echo e(url('article')); ?>" class="text-white">View</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card text-bg-secondary mb-3" style="max-width: 100%;">
                <div class="card-header">Total Kategori</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($kategori); ?> Kategori</h5>
                    <p class="card-text">
                        <a href="<?php echo e(url('kategoris')); ?>" class="text-white">View</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Latest Artikel</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Kategori</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $latest_article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->kategori->name); ?></td>
                        <td><?php echo e($item->created_at); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(url('article/'.$item->id)); ?>" class="btn btn-sm btn-secondary">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="col-6">
            <h4>Popular Artikel</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Kategori</th>
                        <th>View</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $popular_article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->kategori->name); ?></td>
                        <td><?php echo e($item->views); ?>x</td>
                        <td class="text-center">
                            <a href="<?php echo e(url('article/'.$item->id)); ?>" class="btn btn-sm btn-secondary">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/back/dashboard/index.blade.php ENDPATH**/ ?>