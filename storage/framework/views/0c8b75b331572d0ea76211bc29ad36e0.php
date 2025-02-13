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
    <title>About Blogs</title>
</head>
<body>
    <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="max-w-7xl mt-20 mx-auto p-6 bg-[#F4F4F4]">
        <div class="mb-8">
            <div class="flex flex-col md:flex-row gap-10">
                <div class="w-full max-w-4xl mx-auto text-center">
                    <img src="/imagess/image-20.png" alt="Model" class="w-full h-auto grayscale">
                    <p class="mt-2 text-sm text-gray-600">The Modress Price 2025</p>
                </div>
                
                <div class=" mt-7">
                    <h1 class="text-2xl font-semi-bold mb-4">Vulnerability Assessment and Penetration Testing (VAPT):</h1>

                    <p class="text-[20px] text-gray-700 md:mt-20">
                        Lorem ipsum dolor sit amet consectetur. Sit felis tellus urcu nisi sit a blandit orci io. Id eu consequat aliquam mass nata quisque sit. Duis nibh ut proin massa aliquam amet sit done elit. Lorem ipsum dolor sit consectetur. Sit felis tellus arcu nisi sit a blandit orci. Id. Id eu consequat aliquam mass nata quisque sit. Duis nibh ut proin massa aliquam amet sit done elit.
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div class="flex items-center justify-center ">
                <img src="/imagess/blog.png" alt="Group" class="w-[700px] grayscale">   
            </div>
            
            <p class="text-lg m-6 text-gray-700">
                Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi neque quam lacus. Duis nibh ut proin massa aliquam amet sit donec elit.Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi neque quam lacus. Duis nibh ut proin massa aliquam amet sit donec elit.Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi neque quam lacus. Duis nibh ut proin massa aliquam amet sit donec elit.Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi neque quam lacus. Duis nibh ut proin massa aliquam amet sit donec elit.Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi neque quam lacus. Duis nibh ut proin massa aliquam amet sit donec elit.Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi neque quam lacus. Duis nibh ut proin massa aliquam amet sit donec elit.Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi neque quam lacus. Duis nibh ut proin massa aliquam amet sit donec elit.Lorem ipsum dolor sit amet consectetur. Sit felis tellus arcu nisl sit a blandit orci id. Id eu consequat aliquam risus. Ut tortor erat morbi nequ
            </p>
        </div>
    </div>

    <h2 class="text-7xl ml-12 mt-10 text-[#C3C3C3]">More Blogs</h2>

    <?php echo $__env->make('components.layouts.swiper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
</html><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/pages/blogs.blade.php ENDPATH**/ ?>