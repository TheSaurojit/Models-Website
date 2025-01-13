


<?php $__env->startSection('site-content'); ?>
    
    <article id="post-8022"
    class="post-8022 post type-post status-publish format-standard has-post-thumbnail hentry category-bd-culture category-featured category-sex">
    <header class="entry-header">
        <h1 class="entry-title">
            <?php echo e(Str::title($post->title)); ?>

        </h1>
    </header>
    <div class="body-content post-content-wrap">
        <div class="wp-block-image">
            <figure class="aligncenter size-large">
                        <img
                        decoding="async" width="1024" height="682"
                        src="<?php echo e($post->thumbnail); ?>"
                      
                        alt="" class="lazyload wp-image-8025"
                        
                        data-sizes="(max-width: 1024px) 100vw, 1024px">
                    <figcaption class="wp-element-caption">
                        <?php echo e($post->image_caption); ?>

                    </figcaption>
            </figure>
        </div>
      
       
            
        <?php echo $post->blog; ?>

     
    </div>
    </article>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESKTOP\Desktop\FHM laravel blog\resources\views/pages/blog.blade.php ENDPATH**/ ?>