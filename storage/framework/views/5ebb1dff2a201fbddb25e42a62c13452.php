<?php if($type == 'submit' || $type == "Submit"): ?>

    <div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary w-50 mt-4">Submit</button>
    </div>


<?php else: ?>


    <div class="mb-3">
        <label class="form-label"><?php echo e(Str::title($name)); ?></label>
        <div>
            <input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" id="<?php echo e($id ?? ''); ?>" class="form-control w-75"
                placeholder="Enter <?php echo e(Str::title($name)); ?>" value="<?php echo e(old($name, $value ?? '')); ?>" />
        </div>

    </div>


<?php endif; ?>
<?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/components/admin/input-field.blade.php ENDPATH**/ ?>