

<?php $__env->startSection('title', 'List Kategori - Admin'); ?>

<?php $__env->startSection('content'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>

    <div class="mt-3">
        <?php if(auth()->user()->role == 1): ?>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">Register</button>
        <?php endif; ?>

        <?php if($errors->any()): ?>
        <div class="my-3">
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
        <div class="my-3">
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        </div>

        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->created_at); ?></td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#modalUpdate<?php echo e($item->id); ?>">Edit</button>
                            <?php if(auth()->user()->role == 1): ?>
                            <?php if($item->id != auth()->user()->id): ?>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalDelete<?php echo e($item->id); ?>">Delete</button>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!---Modal--->
    <?php echo $__env->make('back.user.create_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('back.user.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('back.user.update_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/back/user/index.blade.php ENDPATH**/ ?>