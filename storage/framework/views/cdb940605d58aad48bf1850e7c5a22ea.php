

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'List Articles - Admin'); ?>

<?php $__env->startSection('content'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Articles</h1>
    </div>

    <div class="mt-3">
        <a href="<?php echo e(url('article/create')); ?>" class="btn btn-primary">Tambah</a>

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

        <div class="swal" data-swal="<?php echo e(session('success')); ?>"></div>

        <table class="table table-striped table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Kategori</th>
                    <th>Views</th>
                    <th>Status</th>
                    <th>Publish Date</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<script>
    const swal = $('.swal').data('swal');

    if (swal) {
        Swal.fire({ 
            'title': 'Success',
            'text': swal,
            'icon': 'success',
            'showCofirmButton': false,
            'timer': 2500
            
         })
    }

    function deleteArticle(e){
        let id = e.getAttribute('data-id');

        Swal.fire({
            title: 'Delete Article',
            text: "Are You Sure.?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            concelButtonColor: '#3085d6',
            confirmButtonText: 'Delete!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    url: '/article/' + id,
                    dataType: 'json',
                    success: function(response){
                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            window.location.href = '/article';
                        })
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
            }
        })
    }
</script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
             processing: true,
            serverside: true,
            ajax: '<?php echo e(url()->current()); ?>',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'kategori_id',
                    name: 'kategori_id'
                },
                {
                    data: 'views',
                    name: 'views'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'publish_date',
                    name: 'publish_date'
                },
                {
                    data: 'button',
                    name: 'button'
                }
            ]
        });
    });
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinaucode\resources\views/back/article/index.blade.php ENDPATH**/ ?>