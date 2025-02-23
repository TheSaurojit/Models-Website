<?php $__env->startSection('body'); ?>


    <?php echo $__env->make('admin.layout.helper.error-msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">

                    <div class="my-4">
                        <h5> Name :</h5>
                        <h4><?php echo e($data['name']); ?></h4> 
                    </div> 

                    <div class="my-4">
                        <h5> Email :</h5>
                        <h4><?php echo e($data['email']); ?></h4> 
                    </div> 
                    
                    <div class="my-4">
                        <h5> Message :</h5>
                        <h4><?php echo e($data['message']); ?></h4> 
                    </div>

                        


                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<?php echo $__env->make('admin.layout.helper.image-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->make('admin.layout.helper.ck-editor-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/admin/contact/view-contact.blade.php ENDPATH**/ ?>