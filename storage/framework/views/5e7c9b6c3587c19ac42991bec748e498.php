


<?php $__env->startSection('body'); ?>


   <?php echo $__env->make('admin.layout.helper.error-msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Category</h4>

                    <form action="<?php echo e(route('update-category' ,['id' => $category['id'] ])); ?>" method="POST">

                        <?php if (isset($component)) { $__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $attributes; } ?>
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'category','value' => ''.e($category->name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\InputField::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494)): ?>
<?php $attributes = $__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494; ?>
<?php unset($__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494)): ?>
<?php $component = $__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494; ?>
<?php unset($__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $attributes; } ?>
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'submit','name' => 'submit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\InputField::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494)): ?>
<?php $attributes = $__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494; ?>
<?php unset($__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494)): ?>
<?php $component = $__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494; ?>
<?php unset($__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494); ?>
<?php endif; ?>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/admin/category/update-category.blade.php ENDPATH**/ ?>