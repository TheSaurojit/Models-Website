


<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('admin.layout.helper.success-msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Trash Posts</h4>

                <a href="<?php echo e(route('all-delete-trash')); ?>">
                    <button style="background-color:yellow">

                        Empty Trash
                    </button>
                </a>
                <br><br>
                <br><br>

                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">

                            <tr>

                                <th> Id </th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($loop->iteration); ?>

                                    </td>

                                    <td><?php echo e($row['title']); ?></td>

                                    <?php if($row['image'] || $row['thumbnail'] || $row['image-1']): ?>
                                        <td>
                                            <img src="<?php echo e($row['image'] ?? ($row['thumbnail'] ?? $row['image-1'])); ?>"
                                                alt="" style="max-width: 120px ; max-height: 120px ">
                                        </td>
                                    <?php endif; ?>

                                    <td>

                                        <a href="<?php echo e(route('restore-trash-posts', ['id' => $row['id']])); ?>"
                                            class="btn btn-success">Restore</a>

                                        <a href="<?php echo e(route('delete-trash-posts', ['id' => $row['id']])); ?>"
                                            class="btn btn-danger">Delete</a>


                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/admin/post/all-trash-post.blade.php ENDPATH**/ ?>