

<?php $__env->startSection('title', 'Create Articles - Admin'); ?>

<?php $__env->startPush('js'); ?>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowserUrl: '/laravel-filemanager?type=Image',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Image&_token',
        filebrowserBrowserUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token',
        clipboard_handleImage: false
    }
</script>

<script>
    CKEDITOR.replace( 'myeditor', options );

    $('#img').change(function() {
        previewImage(this);
    });

    function previewImage(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Articles</h1>
    </div>

    <div class="mt-3">

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

        <form action="<?php echo e(url('article')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title')); ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="kategori_id">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option value="" hidden>-- choose --</option>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?>></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="desc">Desciption</label>
                <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="img">Image (Max 2MB)</label>
                <input type="file" name="img" id="img" class="form-control">

                <div class="mt-1">
                    <img src="" class="img-thumbnail img-preview" width="100px">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" hidden>-- choose --</option>
                            <option value="1">Publish</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="publish_date">Publish Date</label>
                        <input type="date" name="publish_date" id="publish_date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-success">Save</button>
        </form>

    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/back/article/create.blade.php ENDPATH**/ ?>