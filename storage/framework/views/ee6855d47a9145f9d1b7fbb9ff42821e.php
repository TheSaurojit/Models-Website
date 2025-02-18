<div class="my-4">
    <label for="<?php echo e($name); ?>" class="form-label"><?php echo e(Str::title($name)); ?></label>
    <select class="form-select w-75" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" >
        <option value="">Select <?php echo e(Str::title($name)); ?></option>

        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($opt); ?>" <?php echo e(($value == $opt )? "selected" : ""); ?>><?php echo e($opt); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
    </select>
</div>
<?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/components/admin/select-field.blade.php ENDPATH**/ ?>