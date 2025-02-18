
      <div class="flex flex-col md:flex-row md:hidden text-center mb-10">
        <div class="w-full md:w-[500px] text-center md:text-left">
          <h1 class="text-4xl md:text-6xl font-light mt-12 text-gray-600 mb-5 md:mb-16 text-center mx-auto w-full">
            Our Blogs
          </h1>
          
          <p>Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and more.</p>
        </div>
      </div>
  


    <div class="flex flex-col md:flex-row gap-6 md:gap-20">

     <?php if(isset($posts[0]) ): ?>

        <?php
        $post = $posts[0] ;
        $title = $post->title ;
        $image = $post->thumbnail ;
        $url = route('blog',['slug' => $post->slug]) ;
        
        ?>
        
        <a href="<?php echo e($url); ?>">
        <div class="bg-[#F4F4F4] w-full md:w-[780px] xl:w-[880px] 2xl:w-[980px] h-64 relative overflow-hidden">
          <div class="flex flex-col md:flex-row h-full">
            <div class="text-sm p-3 flex-1 flex items-center">
              <p class="text-center md:text-left"><?php echo e($title); ?></p>
            </div>
            <div class="flex-shrink-0 m-3 w-full md:w-auto">
              <img src="<?php echo e($image); ?>" alt="Model" class="w-full h-48 md:h-full object-cover">
            </div>
          </div>
        </div>
        </a>

      <?php endif; ?>


     <?php if(isset($posts[1]) ): ?>
    
        <?php
    
        $post = $posts[1] ;
        $title = $post->title ;
        $image = $post->thumbnail ;
        $url = route('blog',['slug' => $post->slug]) ;
        
        ?>
    
        
        <div class="bg-[#F4F4F4] h-auto md:h-[480px] w-full md:w-96 xl:w-[484px] 2xl:w-[530px] relative overflow-hidden">
          <div class="m-3">
            <a href="<?php echo e($url); ?>">
            <img src="<?php echo e($image); ?>" alt="Model" class="w-full object-cover">
            <div class="text-sm mt-4 p-3 flex items-center text-center">
              <p><?php echo e($title); ?></p>
            </div>
            </a>
          </div>
        </div>

      <?php endif; ?>

    </div>

   
  
      <div class="flex flex-col md:flex-row gap-6 md:gap-10 mt-6 md:mt-[-200px]">

       <?php if(isset($posts[2]) ): ?>
    
          <?php
      
          $post = $posts[2] ;
          $title = $post->title ;
          $image = $post->thumbnail ;
          $url = route('blog',['slug' => $post->slug]) ;
          
          ?>

<a href="<?php echo e($url); ?>">
          <div class="bg-[#F4F4F4] w-full md:w-96 2xl:w-[484px] relative overflow-hidden">
            <div class="m-3">
              <div class="text-sm p-3 flex items-center text-center">
                <p><?php echo e($title); ?></p>
              </div>
              <div class="mt-4">
                <img src="<?php echo e($image); ?>" alt="Model" class="w-full object-cover">
              </div>
            </div>
          </div>
</a>

        <?php endif; ?>


       <?php if(isset($posts[3]) ): ?>
    
          <?php
      
          $post = $posts[3] ;
          $title = $post->title ;
          $image = $post->thumbnail ;
          $url = route('blog',['slug' => $post->slug]) ;
          
          ?>
      
      <a href="<?php echo e($url); ?>">
          <div class="bg-[#F4F4F4] w-full md:w-96 2xl:w-[484px] h-auto md:h-52 relative overflow-hidden">
            <div class="flex flex-col md:flex-row gap-4">
              <div class="w-full md:w-1/2">
                <img src="<?php echo e($image); ?>" alt="Model" class="w-full h-48 md:h-64 object-cover">
              </div>
              <div class="text-sm p-3 flex items-center text-center w-full md:w-1/2">
                <p><?php echo e($title); ?></p>
              </div>
            </div>
          </div>
      </a>
        <?php endif; ?>



      </div>

  

   <?php if(isset($posts[4]) ): ?>
    
      <?php

      $post = $posts[4] ;
      $title = $post->title ;
      $image = $post->thumbnail ;
      $url = route('blog',['slug' => $post->slug]) ;
      
      ?>
      <a href="<?php echo e($url); ?>">
      <div class="bg-[#F4F4F4] w-full md:w-[480px] xl:w-[830px] 2xl:w-[980px] h-64 relative overflow-hidden mt-6 md:mt-[-70px] mb-10 ml-auto">
        <div class="flex flex-col md:flex-row h-full">
          <div class="text-sm p-3 flex-1 flex items-center">
            <p class="text-center md:text-left"><?php echo e($title); ?></p>
          </div>
          <div class="flex-shrink-0 m-3 w-full md:w-auto">
            <img src="<?php echo e($image); ?>" alt="Model" class="w-full h-48 md:h-full object-cover">
          </div>
        </div>
      </div>
    </a>
    <?php endif; ?>


<?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/components/component3.blade.php ENDPATH**/ ?>