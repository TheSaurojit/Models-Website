<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('admin.layout.helper.success-msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Contact</h4>
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">

                            <tr>

                                <th> Id </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($loop->iteration); ?>

                                    </td>

                                    <td><?php echo e($row['name']); ?></td>

                                    <td><?php echo e($row['email']); ?></td>


                                    <td>

                                        <a href="<?php echo e(route('view-contact', ['id' => $row['id']])); ?>"
                                            class="btn btn-success">View</a>

                                        <a href="<?php echo e(route('delete-contact', ['id' => $row['id']])); ?>"
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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/admin/contact/all-contact.blade.php ENDPATH**/ ?>