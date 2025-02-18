<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <title>Models website</title>
</head>
<body>

  <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <?php if($firstPost): ?>

      <?php
      $post = $firstPost ;
      $title = $post->title ;
      $image = $post->thumbnail ;
      $url = route('blog',['slug' => $post->slug]) ;
      
      ?>
    

      <section class="md:hidden">
        <div class="h-[450px]">
          <img src="<?php echo e($image); ?>" alt="Fashion models" class="mt-20 w-full h-full object-cover" />
        </div>
      </section>

        <section class="hidden md:block">
        <div class="relative w-full mt-0 md:mt-[80px]">
            <div class="relative h-[800px] overflow-hidden">
              <img src="<?php echo e($image); ?>" alt="Fashion models" class="w-full mt-[-50px] p-8 object-cover" />
              <div class="absolute top-12 left-12 max-w-md">
                <p class="text-sm text-gray-800 mr-36 hidden md:block">
                  Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and ethical hackers. It is part of the MetaupSpace network and covers a wide range of knowledge, tips, and tricks related to cybersecurity.
                </p>
              </div>

              <div class="absolute top-4 right-6 max-w-md text-right">
                <p class="text-sm text-gray-800 m-10">
                    Insider HackZ
                </p>
              </div>
              
              <div class="absolute bottom-10 right-8 max-w-md text-right hidden md:block">
                <p class="text-sm text-gray-800 m-10 ">
                  Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and ethical hackers.
                </p>
              </div>

              <div class="absolute bottom-10 left-5 max-w-md text-right hidden md:block">
                <p class="text-sm text-gray-800 m-10">
                    Insider HackZ is an online resource that
                </p>
              </div>

            </div>
          </div>
        </section>

    <?php endif; ?>
  



    <section class="mt-12 md:mt-0">
        <div class="text-center hidden md:block">
             <h2 class="text-[41.12px]">Team of Expert Consultants</h2>
             <p class="text-[14.06px] ml-96 mr-96 mt-5">Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and ethical hackers. It is part of the HackTricks platform, which offers a wide range of knowledge, tips, and tricks related to cybersecurity.
            </p>
        </div>

        <div class="mt-[-100px]">
        <?php echo $__env->make('components.layouts.component1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>


    <section>
        <div class="m-5 md:m-10">
            <h1 class="text-[#C3C3C3] md:mt-36  mt-10 text-3xl md:text-6xl">Trending</h1>
        </div>

        <?php echo $__env->make('components.layouts.swiper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </section>

    <section>       
            <div class="m-10 ml-auto md:text-right">
                <h1 class="text-[#C3C3C3] ml-5 text-3xl md:text-6xl">Top Models</h1>
            </div>

<div class="hidden md:flex gap-10 m-10">
  <?php $__currentLoopData = $allCelebrity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php

        $name = $model["name"] ;
        $bio = $model["bio"] ;
        $image = $model["image-1"] ;
        $url = route('profile',['name'=>$name]) ;


    ?>
    <div class="relative">
        <img src="<?php echo e($image); ?>" alt="Portrait" class="w-full object-cover" />
        <div class="absolute xl:bottom-44 2xl:bottom-56 left-1">
            <div class="backdrop-blur-md bg-white/30 rounded-lg overflow-hidden">
                <div class="px-6 py-4">
                    <h3 class="text-gray-800 font-mono text-lg"><?php echo e($name); ?></h3>
                </div>
            </div>
        </div>
    </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  
</div>



<div class="block md:hidden m-5">
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
          <div class="swiper-slide relative">
              <img src="/imagess/image-6.png" alt="Portrait" class="w-full object-cover h-[560px]" />
              <div class="absolute bottom-5 left-1">
                  <div class="backdrop-blur-md bg-white/30 rounded-lg overflow-hidden">
                      <div class="px-6 py-4">
                          <h3 class="text-gray-800 font-mono text-lg">Darlene Robertson</h3>
                          <p class="text-gray-600 font-mono text-sm">USA</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="swiper-slide relative">
              <img src="/imagess/image-7.png" alt="Portrait" class="w-full object-cover h-[560px]" />
              <div class="absolute bottom-5 left-1">
                  <div class="backdrop-blur-md bg-white/30 rounded-lg overflow-hidden">
                      <div class="px-6 py-4">
                          <h3 class="text-gray-800 font-mono text-lg">Darlene Robertson</h3>
                          <p class="text-gray-600 font-mono text-sm">USA</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="swiper-slide relative">
              <img src="/imagess/image-5.png" alt="Portrait" class="w-full object-cover h-[560px]" />
              <div class="absolute bottom-3 left-1">
                  <div class="backdrop-blur-md bg-white/30 rounded-lg overflow-hidden">
                      <div class="px-6 py-4">
                          <h3 class="text-gray-800 font-mono text-lg">Darlene Robertson</h3>
                          <p class="text-gray-600 font-mono text-sm">USA</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

    </section>


    <section class="bg-white">

    <?php echo $__env->make('components.layouts.component1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="container mx-auto px-4 relative">
          <h1 class="text-2xl md:text-6xl font-light text-gray-300 mb-16">Publications</h1>
          
          <div class="flex">
              <div class="relative h-[800px] w-3/4 hidden md:block">
                  <div class="absolute left-0 top-0 z-10">
                    <img 
                        src="/imagess/image-8.png"
                        alt="Young model portrait"
                        class="w-full h-[450px] object-cover"
                    />
                  </div>
  
                  <div class="absolute left-[50px] top-[250px] z-40">
                    <img 
                        src="/imagess/image-10.png"
                        alt="Red dress runway"
                        class="w-full h-[430px] object-cover"
                    />
                </div>
  
                  <div class="absolute left-[350px] top-[-100px] z-30">
                    <img 
                        src="/imagess/image-9.png"
                        alt="White t-shirt outdoor"
                        class="w-full h-[400px] object-cover"
                    />
                </div>
  
                  <div class="absolute left-[280px] top-[280px] z-40">
                    <img 
                        src="/imagess/image-11.png"
                        alt="Geometric pattern"
                        class="w-full h-[400px] object-cover"
                    />
                </div>
  
                  <div class="absolute left-[590px] top-[50px]  z-20">
                    <img 
                        src="/imagess/image-4.png"
                        alt="Light colored fashion"
                        class="w-full h-[420px] object-cover"
                    />
                </div>
              </div>


              <div class="md:hidden mt-[-50px] mb-20">

                <img src="/imagess/Frame69.png" alt="" class="w-full">
              </div>
  
              <div class="w-1/4 pt-28 hidden md:block">
                  <h2 class="ml-44 writing-mode-vertical whitespace-nowrap transform rotate-90 text-gray-800 text-[41.12px] tracking-wider">
                      Team of Expert Consultants
                  </h2>
                  <p class="transform rotate-90 text-center text-sm leading-tight max-w-[1200px] mt-28">
                    Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and ethical hackers. It is part of the HackTricks platform, which offers a wide range of knowledge, tips, and tricks related to cybersecurity.
                  </p>
              </div>
          </div>
      </div>
  </section>


  <section class="m-10">
    <div class="flex flex-col md:flex-row mb-10">
      <h1 class="text-4xl md:text-6xl font-light text-gray-600 mb-4 md:mb-16 text-center md:text-left">
        All Models
      </h1>
    
      <div class="w-full md:w-[500px] text-center md:text-right flex md:ml-auto">
        <p>
          Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and more.
        </p>
      </div>
    </div>
    


      <div class="flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

          <?php $__currentLoopData = $allCelebrity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php

                $name = $model["name"] ;
                $bio = $model["bio"] ;
                $image = $model["image-1"] ;
                $url = route('profile',['name'=>$name]) ;


            ?>


            <div class="md:p-4 rounded flex items-center gap-4">
              <a href="<?php echo e($url); ?>">
                <img src="<?php echo e($image); ?>" alt="Model" class="w-24 h-24 object-cover">
                <div>
                  <h2 class="text-lg font-semibold text-gray-800"><?php echo e($name); ?></h2>
                </div>
              </a>
            </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     


        </div>
      </div>
      
      
      <div class="mt-8 flex justify-center items-center">
        <a href="<?php echo e(route('models')); ?>" class="px-6 py-2 bg-black text-white rounded hover:bg-gray-800">View All →</a>
      </div>
  </section>


  <section class="m-10 container mx-auto">
    <div class="m-4 md:m-0">
  <div class="hidden md:block">
    <div class="flex flex-col md:flex-row ">
      <div class="w-full md:w-[500px] text-center md:text-left">
        <p>Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and more.</p>
      </div>
      <h1 class="text-4xl md:text-6xl flex font-light md:ml-auto text-center md:text-right text-gray-600 mb-8 md:mb-16">Our Blogs</h1>
    </div>
      </div>
    </div>


            <?php $__currentLoopData = $recentPosts->slice(0,30)->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if (isset($component)) { $__componentOriginalde91f81781046b39a47715c7fef7edfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde91f81781046b39a47715c7fef7edfc = $attributes; } ?>
<?php $component = App\View\Components\Component3::resolve(['posts' => $posts->values()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </section>

  


  <?php echo $__env->make('components.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
                  var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            slidesPerView: 1, 
            breakpoints: {
              768: { 
                slidesPerView: 2,
              },
              1024: { 
                slidesPerView: 3.5,
              }
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });

    </script>
      
</body>
</html><?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/pages/home.blade.php ENDPATH**/ ?>