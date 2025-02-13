<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <title>Document</title>
</head>
<body>
    <nav class="m-7 flex">
        <div class="mt-5">
            <a href="">
            <img src="<?php echo e(Vite::asset('resources/images/MODELLING..png')); ?>">
            </a>
        </div>

        <div class="bg-[#B6B6B6] bg-opacity-14 p-4 mx-auto">
            <ul class="flex gap-28">
                <a href=""><li>Home</li></a>
                <a href=""><li>Blogs</li></a>
                <a href=""><li>Models</li></a>
                <a href=""><li>About Us</li></a>
            </ul>
        </div>

        <div class="flex justify-end ml-auto gap-7">
            <a class="bg-black p-5 px-2 py-4  text-white">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        
            <a class="bg-black text-white p-5 px-2 py-3 cursor-pointer hover:bg-gray-800">
                Contact us
            </a>
            
        </div>
        
    </nav>
</body>
</html><?php /**PATH /home/orcas/Desktop/Models-Website/resources/views/pages/home.blade.php ENDPATH**/ ?>