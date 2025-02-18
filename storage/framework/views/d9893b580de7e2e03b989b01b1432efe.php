<?php $__env->startSection('body'); ?>


    <?php echo $__env->make('admin.layout.helper.error-msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Model</h4>

                    <form action="<?php echo e(route('create-celebrity')); ?>" method="POST" enctype="multipart/form-data">

                        <?php if (isset($component)) { $__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $attributes; } ?>
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'bio'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                        <?php if (isset($component)) { $__componentOriginal561664b0286d002fd7c31e8b1ae6a7bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal561664b0286d002fd7c31e8b1ae6a7bd = $attributes; } ?>
<?php $component = App\View\Components\Admin\SelectField::resolve(['name' => 'gender','options' => ['Male' ,'Female','Transgender']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.select-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\SelectField::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal561664b0286d002fd7c31e8b1ae6a7bd)): ?>
<?php $attributes = $__attributesOriginal561664b0286d002fd7c31e8b1ae6a7bd; ?>
<?php unset($__attributesOriginal561664b0286d002fd7c31e8b1ae6a7bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal561664b0286d002fd7c31e8b1ae6a7bd)): ?>
<?php $component = $__componentOriginal561664b0286d002fd7c31e8b1ae6a7bd; ?>
<?php unset($__componentOriginal561664b0286d002fd7c31e8b1ae6a7bd); ?>
<?php endif; ?>


                        <?php if (isset($component)) { $__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $attributes; } ?>
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'instagram'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


                        <?php if (isset($component)) { $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e = $attributes; } ?>
<?php $component = App\View\Components\Admin\ImageComponent::resolve(['name' => 'image-1'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.image-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\ImageComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $attributes = $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $component = $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e = $attributes; } ?>
<?php $component = App\View\Components\Admin\ImageComponent::resolve(['name' => 'image-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.image-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\ImageComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $attributes = $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $component = $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e = $attributes; } ?>
<?php $component = App\View\Components\Admin\ImageComponent::resolve(['name' => 'image-3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.image-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\ImageComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $attributes = $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $component = $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e = $attributes; } ?>
<?php $component = App\View\Components\Admin\ImageComponent::resolve(['name' => 'image-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.image-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\ImageComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $attributes = $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e)): ?>
<?php $component = $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e; ?>
<?php unset($__componentOriginal73ae9aafd6f77a6862c832f9ebab345e); ?>
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


<?php $__env->startSection('script'); ?>

<?php echo $__env->make('admin.layout.helper.image-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/admin/celebrity/create-celebrity.blade.php ENDPATH**/ ?>