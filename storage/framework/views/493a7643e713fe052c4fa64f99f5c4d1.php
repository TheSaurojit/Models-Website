<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="m-16 mt-20 text-gray-400">
         <h2 class="text-3xl ">Our Blogs</h2>
    </div>

    <section class="m-10 container mx-auto">
        <div class="m-4 md:m-0">
        <?php if (isset($component)) { $__componentOriginalde91f81781046b39a47715c7fef7edfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde91f81781046b39a47715c7fef7edfc = $attributes; } ?>
<?php $component = App\View\Components\Component3::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component3::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde91f81781046b39a47715c7fef7edfc)): ?>
<?php $attributes = $__attributesOriginalde91f81781046b39a47715c7fef7edfc; ?>
<?php unset($__attributesOriginalde91f81781046b39a47715c7fef7edfc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde91f81781046b39a47715c7fef7edfc)): ?>
<?php $component = $__componentOriginalde91f81781046b39a47715c7fef7edfc; ?>
<?php unset($__componentOriginalde91f81781046b39a47715c7fef7edfc); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalde91f81781046b39a47715c7fef7edfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde91f81781046b39a47715c7fef7edfc = $attributes; } ?>
<?php $component = App\View\Components\Component3::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component3::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde91f81781046b39a47715c7fef7edfc)): ?>
<?php $attributes = $__attributesOriginalde91f81781046b39a47715c7fef7edfc; ?>
<?php unset($__attributesOriginalde91f81781046b39a47715c7fef7edfc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde91f81781046b39a47715c7fef7edfc)): ?>
<?php $component = $__componentOriginalde91f81781046b39a47715c7fef7edfc; ?>
<?php unset($__componentOriginalde91f81781046b39a47715c7fef7edfc); ?>
<?php endif; ?>

        </div>
    </section>
</body>
</html><?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/pages/blogfull.blade.php ENDPATH**/ ?>