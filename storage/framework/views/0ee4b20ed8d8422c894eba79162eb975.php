<div class="col-sm-9">
    <!-- Hidden File Input -->
    <h6 class="form-label mb-4 mt-4"><?php echo e(Str::title(Str::replace("_"," ",$name))); ?></h6>

    <input 
        type="file" 
        class="form-control d-none" 
        id="horizontal-<?php echo e($name); ?>-input" 
        name="<?php echo e($name); ?>" 
        accept="image/*" 
        onchange="previewImage(event, '<?php echo e($name); ?>')"
    >
    
    <!-- Upload or Change Button -->
    <?php if($value): ?>

        <div id="<?php echo e($name); ?>-preview-container" class="mt-3">
            <img 
                id="<?php echo e($name); ?>-preview" 
                src="<?php echo e($value); ?>" 
                alt="<?php echo e(ucfirst($name)); ?> Preview" 
                style="max-width: 300px ; max-height: 300px; border: 1px solid #ddd; padding: 5px;"
            >
            <button 
                type="button" 
                class="btn btn-secondary mt-2" 
                onclick="document.getElementById('horizontal-<?php echo e($name); ?>-input').click();"
            >
                Change Image
            </button>
        </div>
    <?php else: ?>
        <button 
            type="button" 
            class="btn btn-primary" 
            id="upload-<?php echo e($name); ?>-button" 
            onclick="document.getElementById('horizontal-<?php echo e($name); ?>-input').click();"
        >
            Upload <?php echo e(Str::title(Str::replace("_"," ",$name))); ?>

            

        </button>

        <div id="<?php echo e($name); ?>-preview-container" class="mt-3" style="display: none;">
            <img 
                id="<?php echo e($name); ?>-preview" 
                src="#" 
                alt="<?php echo e(ucfirst($name)); ?> Preview" 
                style="max-width: 300px ; max-height: 300px; border: 1px solid #ddd; padding: 5px;"
            >
            <button 
                type="button" 
                class="btn btn-secondary mt-2" 
                onclick="document.getElementById('horizontal-<?php echo e($name); ?>-input').click();"
            >
                Change Image
            </button>
        </div>
    <?php endif; ?>
</div>

<br> <br><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/components/admin/image-component.blade.php ENDPATH**/ ?>