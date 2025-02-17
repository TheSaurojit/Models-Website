<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
   
    <div>
        <div class="min-h-screen grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 mt-28 p-4 md:ml-5">
            <?php if (isset($component)) { $__componentOriginala515ae5b2e56486f3eee8105b88307b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala515ae5b2e56486f3eee8105b88307b8 = $attributes; } ?>
<?php $component = App\View\Components\Component2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component2::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $attributes = $__attributesOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $component = $__componentOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__componentOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala515ae5b2e56486f3eee8105b88307b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala515ae5b2e56486f3eee8105b88307b8 = $attributes; } ?>
<?php $component = App\View\Components\Component2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component2::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $attributes = $__attributesOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $component = $__componentOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__componentOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala515ae5b2e56486f3eee8105b88307b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala515ae5b2e56486f3eee8105b88307b8 = $attributes; } ?>
<?php $component = App\View\Components\Component2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component2::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $attributes = $__attributesOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $component = $__componentOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__componentOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala515ae5b2e56486f3eee8105b88307b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala515ae5b2e56486f3eee8105b88307b8 = $attributes; } ?>
<?php $component = App\View\Components\Component2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component2::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $attributes = $__attributesOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $component = $__componentOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__componentOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala515ae5b2e56486f3eee8105b88307b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala515ae5b2e56486f3eee8105b88307b8 = $attributes; } ?>
<?php $component = App\View\Components\Component2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component2::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $attributes = $__attributesOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $component = $__componentOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__componentOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala515ae5b2e56486f3eee8105b88307b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala515ae5b2e56486f3eee8105b88307b8 = $attributes; } ?>
<?php $component = App\View\Components\Component2::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Component2::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $attributes = $__attributesOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__attributesOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala515ae5b2e56486f3eee8105b88307b8)): ?>
<?php $component = $__componentOriginala515ae5b2e56486f3eee8105b88307b8; ?>
<?php unset($__componentOriginala515ae5b2e56486f3eee8105b88307b8); ?>
<?php endif; ?>
    </div>

    <?php echo $__env->make('components.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/pages/models.blade.php ENDPATH**/ ?>