<?php $__env->startSection('body'); ?>


    <?php echo $__env->make('admin.layout.helper.error-msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Post</h4>

                    <form action="<?php echo e(route('create-post')); ?>" method="POST" enctype="multipart/form-data">

                        <?php if (isset($component)) { $__componentOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b76b0dddcf5d81e609c55b3b1b5e494 = $attributes; } ?>
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'title'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'keywords'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                        <?php

                            $name = "model" ;

                        ?>

                        <div class="my-4">
                            <label for="<?php echo e($name); ?>" class="form-label"><?php echo e(Str::title($name)); ?></label>
                            <select class="form-select w-75" id="<?php echo e($name); ?>" name="model" >
                                <option value="">Select <?php echo e(Str::title($name)); ?></option>

                                <?php $__currentLoopData = $allCelebrity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $celeb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($celeb["id"]); ?>" ><?php echo e($celeb["name"]); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                            </select>
                        </div>

                        <?php if (isset($component)) { $__componentOriginal73ae9aafd6f77a6862c832f9ebab345e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73ae9aafd6f77a6862c832f9ebab345e = $attributes; } ?>
<?php $component = App\View\Components\Admin\ImageComponent::resolve(['name' => 'thumbnail'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'text','name' => 'image caption'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Admin\InputField::resolve(['type' => 'datetime-local','name' => 'created at'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


                        <?php if (isset($component)) { $__componentOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d = $attributes; } ?>
<?php $component = App\View\Components\Admin\TextArea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.text-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\TextArea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d)): ?>
<?php $attributes = $__attributesOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d; ?>
<?php unset($__attributesOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d)): ?>
<?php $component = $__componentOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d; ?>
<?php unset($__componentOriginalb27bb9bb4fbd236cfa3b2ee825f73c4d); ?>
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


<?php echo $__env->make('admin.layout.helper.ck-editor-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/admin/post/create-post.blade.php ENDPATH**/ ?>