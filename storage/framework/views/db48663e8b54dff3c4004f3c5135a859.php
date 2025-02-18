<a href="<?php echo e($url); ?>">
    <div class="w-full bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="relative h-48 sm:h-56">
        <img src="<?php echo e($image); ?>" alt="Card image" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
    </div>
    <div class="p-5">
        <h2 class="text-xl font-bold text-gray-800 mb-2"><?php echo e($name); ?></h2>
        <p class="text-gray-600 text-sm mb-4">
            <?php echo e($bio); ?>

        </p>
        <div class="flex justify-between items-center">
            <button class="px-4 py-2 bg-blue-600 mx-auto text-white rounded-lg hover:bg-blue-700 transition-colors duration-200">
                Read More
            </button>
            
        </div>
    </div>
    </div>

</a>
<?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/components/component2.blade.php ENDPATH**/ ?>