<div class="swiper mySwiper md:mt-[-50px] p-6 md:p-12">
    <div class="swiper-wrapper">

        <?php $__currentLoopData = $allCelebrity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php

                $name = $model["name"] ;
                $bio = $model["bio"] ;
                $image = $model["image-1"] ;
                $url = route('profile',['name'=>$name]) ;


            ?>


            <div class="swiper-slide flex flex-col items-start">
                <a href="<?php echo e($url); ?>">
                <img src="<?php echo e($image); ?>" class="w-96 h-96">  
                <h2 class="text-lg font-semibold mt-4"><?php echo e($name); ?></h2>
                </a>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/components/layouts/swiper.blade.php ENDPATH**/ ?>