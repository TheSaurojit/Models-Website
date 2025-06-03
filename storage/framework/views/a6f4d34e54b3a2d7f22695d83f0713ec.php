<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <title>Models Realm</title>
</head>

<body>

    <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($firstPost): ?>
        <?php
            $post = $firstPost;
            $title = $post->title;
            $image = $post->thumbnail;
            $url = route('blog', ['slug' => $post->slug]);

        ?>


        <section class="md:hidden">
            <div class="h-[450px]">
                <a href="<?php echo e($url); ?>">
                    <img src="<?php echo e($image); ?>" alt="Fashion models" class="mt-20 z-10 w-full h-full object-cover" />
                </a>
            </div>
        </section>

        <section class="hidden md:block">
            <div class="relative w-full mt-0 md:mt-[80px]">
                <div class="relative h-[800px] overflow-hidden">
                    <a href="<?php echo e($url); ?>">
                        <img src="<?php echo e($image); ?>" alt="Fashion models"
                            class="w-full mt-[-50px] mb-10 p-8 object-cover" />
                    </a>
                    <div class="absolute top-12 left-12 max-w-md">
                        <p class="text-sm text-gray-800 mr-36 hidden md:block">
                            <?php echo e(Str::words($post->celebrity->bio, 15)); ?>

                        </p>
                    </div>

                    <div class="absolute top-4 right-6 max-w-md text-right">
                        <p class="text-sm text-gray-800 m-10">
                           <?php echo e($post->celebrity->name); ?>

                        </p>
                    </div>

                    <div class="absolute bottom-10 left-5 max-w-md text-right hidden md:block">
                        <a href="<?php echo e($post->celebrity->instagram); ?>">
                            <p class="text-sm text-gray-800 m-10">
                            Instagram
                            </p>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>




    <section class="mt-32 md:mt-5">
        <div class="text-center hidden md:block">
            <h2 class="text-[41.12px]">Team of Expert Consultants</h2>
            <p class="text-[14.06px] ml-96 mr-96 mt-5">Our expert consultants are more than industry professionals
— they are mentors, guides, and creative partners. With years of experience in fashion,
branding, and talent development, they work closely with each model to unlock their full
potential, providing personalized support every step of the way.
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

    <section class="md:mt-[-40px]">
        <div class="md:m-10 ml-auto md:text-right">
            <h1 class="text-[#C3C3C3] ml-5 text-3xl md:text-6xl">Top Models</h1>
        </div>

        <div class="hidden md:flex gap-10 m-10 max-w-7xl mx-auto 2xl:ml-52">

            <?php if(isset($trendingCeleb[0])): ?>
                <?php
                    $model = $trendingCeleb[0];
                    $name = $model['name'];
                    $bio = $model['bio'];
                    $image = $model['image-1'];
                    $url = route('profile', ['name' => $name]);

                ?>


            <div class="relative">
                 <a href="<?php echo e($url); ?>">

                <img src="<?php echo e($image); ?>" alt="Portrait" class="w-[400px] object-cover" />
                <div class="absolute xl:bottom-44 2xl:bottom-56 left-1">
                    <div class="backdrop-blur-md bg-white/30 rounded-lg 2xl:mt-[-150px] mt-[-200px] overflow-hidden">
                        <div class="px-6 py-4">
                        <h3 class="text-gray-800 font-mono text-lg"><?php echo e($name); ?></h3>
                    </div>
                </div>
            </div>
            </a>
            </div>

            <?php endif; ?>


            <?php if(isset($trendingCeleb[1])): ?>
                <?php
                    $model = $trendingCeleb[1];
                    $name = $model['name'];
                    $bio = $model['bio'];
                    $image = $model['image-1'];
                    $url = route('profile', ['name' => $name]);

                ?>

                <div class="relative">
                    <a href="<?php echo e($url); ?>">

                    <img src="<?php echo e($image); ?>" alt="Portrait" class="w-[380px] h-[700px] object-cover" />
                    <div class="absolute bottom-5 2xl:bottom-10 left-1">
                        <div class="backdrop-blur-md bg-white/30 mt-[-160px] rounded-lg overflow-hidden">
                            <div class="px-6 py-4">
                                <h3 class="text-gray-800 font-mono text-lg"><?php echo e($name); ?></h3>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            <?php endif; ?>


            <?php if(isset($trendingCeleb[2])): ?>
                <?php
                    $model = $trendingCeleb[2];
                    $name = $model['name'];
                    $bio = $model['bio'];
                    $image = $model['image-1'];
                    $url = route('profile', ['name' => $name]);

                ?>

                <div class="relative">
                    <a href="<?php echo e($url); ?>">
                        <img src="<?php echo e($image); ?>" alt="Portrait" class="w-[400px] h-[800px] object-cover" />
                        <div class="absolute bottom-3 left-1">
                            <div class="backdrop-blur-md bg-white/30 rounded-lg overflow-hidden">
                                <div class="px-6 py-4">
                                    <h3 class="text-gray-800 font-mono text-lg"><?php echo e($name); ?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

        </div>



        <div class="block md:hidden m-5">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <?php $__currentLoopData = $allCelebrity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php

                            $name = $model['name'];
                            $bio = $model['bio'];
                            $image = $model['image-1'];
                            $url = route('profile', ['name' => $name]);

                        ?>

                        <div class="swiper-slide relative">
                            <img src="<?php echo e($image); ?>" alt="Portrait" class="w-full object-cover h-[560px]" />
                            <div class="absolute bottom-5 left-1">
                                <div class="backdrop-blur-md bg-white/30 rounded-lg overflow-hidden">
                                    <div class="px-6 py-4">
                                        <h3 class="text-gray-800 font-mono text-lg"><?php echo e($name); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                        <img src="/imagess/image-8.png" alt="Young model portrait"
                            class="w-full h-[450px] object-cover" />
                    </div>

                    <div class="absolute left-[50px] top-[250px] z-40">
                        <img src="/imagess/image-10.png" alt="Red dress runway" class="w-full h-[430px] object-cover" />
                    </div>

                    <div class="absolute left-[350px] top-[-100px] z-30">
                        <img src="/imagess/image-9.png" alt="White t-shirt outdoor"
                            class="w-full h-[400px] object-cover" />
                    </div>

                    <div class="absolute left-[280px] top-[280px] z-40">
                        <img src="/imagess/image-11.png" alt="Geometric pattern"
                            class="w-full h-[400px] object-cover" />
                    </div>

                    <div class="absolute left-[590px] top-[50px]  z-20">
                        <img src="/imagess/image-4.png" alt="Light colored fashion"
                            class="w-full h-[420px] object-cover" />
                    </div>
                </div>


                <div class="md:hidden mt-[-50px] mb-20">

                    <img src="/imagess/Frame69.png" alt="" class="w-full">
                </div>

                <div class="w-1/4 md:pt-28 hidden md:block">
                    <h2
                        class="ml-44 writing-mode-vertical whitespace-nowrap transform rotate-90 text-gray-800 text-[41.12px] tracking-wider">
                        Team of Expert Consultants
                    </h2>
                    <p class="transform rotate-90 text-center text-sm leading-tight max-w-[1200px] mt-28">
                        Our expert consultants are more than industry professionals
— they are mentors, guides, and creative partners. With years of experience in fashion,
branding, and talent development, they work closely with each model to unlock their full
potential, providing personalized support every step of the way.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="m-10 mt-[-25px] md:mt-[-40px]">
        <div class="flex flex-col md:flex-row mb-10">
            <h1 class="text-4xl md:text-6xl font-light text-gray-600 mb-4 md:mb-16 text-center md:text-left">
                All Models
            </h1>

            <div class="w-full md:w-[500px] text-center md:text-right flex md:ml-auto">
                <p>
                    Whether you're just starting out or ready to take the next
big step, we’re here to support your journey. At Models Realm, you're not just a face —
you're a brand. Let’s build it together, with purpose, passion, and the right opportunities.
                </p>
            </div>
        </div>



        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                <?php $__currentLoopData = $allCelebrity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php

                        $name = $model['name'];
                        $bio = $model['bio'];
                        $image = $model['image-1'];
                        $url = route('profile', ['name' => $name]);

                    ?>


                    <div class="md:p-4 rounded flex items-center gap-4">
                        <a href="<?php echo e($url); ?>" class="flex">
                            <img src="<?php echo e($image); ?>" alt="Model" class="w-24 h-24 object-cover">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-800 ml-6 mt-7"><?php echo e($name); ?></h2>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
        </div>


        <div class="mt-8 flex justify-center items-center">
            <a href="<?php echo e(route('models')); ?>" class="px-6 py-2 bg-black text-white rounded hover:bg-gray-800">View All
                →</a>
        </div>
    </section>


    <section class="m-10 container mx-auto">
        <div class="m-4 md:m-0">
            <div class="hidden md:block">
                <div class="flex flex-col md:flex-row ">
                    <div class="w-full md:w-[500px] text-center md:text-left">
                        <p>Step into the world of our models — where style meets
                            story. From behind-the-scenes moments to personal journeys and industry tips, our blogs
                            offer a real, unfiltered look at life beyond the lens.</p>
                    </div>
                    <h1
                        class="text-4xl md:text-6xl flex font-light md:ml-auto text-center md:text-right text-gray-600 mb-8 md:mb-16">
                        Our Blogs</h1>
                </div>
            </div>
        </div>


        <div class="flex flex-col md:flex-row md:hidden text-center mt-10 mb-10">
            <div class="w-full md:w-[500px] text-center md:text-left">
              <h1 class="text-4xl md:text-6xl font-light text-gray-600 mb-5 md:mb-16 text-center mx-auto w-full">
                Our Blogs
              </h1>
              
              <p>Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and more.</p>
            </div>
        </div>

        <?php $__currentLoopData = $recentPosts->slice(0, 15)->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal3c41f253972e0c5d907ca35639c57c3f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c41f253972e0c5d907ca35639c57c3f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.component3','data' => ['posts' => $posts->values()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('component3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['posts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($posts->values())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c41f253972e0c5d907ca35639c57c3f)): ?>
<?php $attributes = $__attributesOriginal3c41f253972e0c5d907ca35639c57c3f; ?>
<?php unset($__attributesOriginal3c41f253972e0c5d907ca35639c57c3f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c41f253972e0c5d907ca35639c57c3f)): ?>
<?php $component = $__componentOriginal3c41f253972e0c5d907ca35639c57c3f; ?>
<?php unset($__componentOriginal3c41f253972e0c5d907ca35639c57c3f); ?>
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

</html>
<?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/pages/home.blade.php ENDPATH**/ ?>