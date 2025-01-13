


<?php $__env->startSection('site-content'); ?>


    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
    <?php
        
        $url = route('blog',['slug'=>$post->slug]) ;

        $catUrl = route('category',['category'=>$category]) ;

        $title = Str::title($post->title) ;

    ?>


    <article id="post-8083" class="blog-post-wrap feed-item" style=" <?php echo e($loop->index == 0 ? "width : 100%" : ""); ?> ">
        <div class="blog-post-inner">
            <div class="blog-post-image">
                 <a
                    href="<?php echo e($url); ?>"
                    title="<?php echo e($title); ?>"> 
                           <img
                            loading="lazy" width="283" height="236"
                            
                            src="<?php echo e($post->thumbnail); ?>"
                           
                            class="lazyload attachment-madd-magazine-blog-post size-madd-magazine-blog-post wp-post-image"
                            alt="" decoding="async" 
                            
                            style="
                            aspect-ratio : 4/3  ;
                            object-fit : cover ;
                            object-position : top ;
                            "/>
                    </a>
                <div class="categories-wrap">
                    <ul class="post-categories">
                        <li><a href="<?php echo e($catUrl); ?>"
                                rel="category tag"><?php echo e(Str::title($category)); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="blog-post-content">
                <h2> <a href="<?php echo e($url); ?>"
                        title="<?php echo e($title); ?>"><?php echo e($title); ?></a></h2>
                <div class="date"><?php echo e($post->created_at->format('F d, Y')); ?></div>
            </div>
        </div>
    </article>



    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

    <h1>No Posts  created in this category</h1>

    <?php endif; ?>


    <div class="clear_b"></div>
    <nav class="navigation pagination" aria-label="Posts">
        <h2 class="screen-reader-text">Posts navigation</h2>
        <div class="nav-links">

            
            <?php if(!$posts->onFirstPage()): ?>
                <a class="prev page-numbers" href="<?php echo e($posts->previousPageUrl()); ?>" rel="prev">&#8592;</a>

            <?php endif; ?>
    
            
            
    
            
            <?php if($posts->hasMorePages()): ?>
                <a class="next page-numbers" href="<?php echo e($posts->nextPageUrl()); ?>" rel="next">&#8594;</a>
            
            <?php endif; ?>
        </div>
    </nav>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESKTOP\Desktop\FHM laravel blog\resources\views/pages/category.blade.php ENDPATH**/ ?>