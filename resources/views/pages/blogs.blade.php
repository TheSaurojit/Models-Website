<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="icon" href="/imagess/M.jpg">
    <title>Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.layouts.header')

    <div class="flex flex-col md:flex-row md:hidden text-center mt-10">
        <div class="w-full md:w-[500px] text-center md:text-left">
          <h1 class="text-4xl md:text-6xl font-light mt-12 text-gray-600 mb-5 md:mb-16 text-center mx-auto w-full">
            Our Blogs
          </h1>
          
          <p>Insider HackZ is an online resource that serves as a comprehensive guide for penetration testers, security researchers, and more.</p>
        </div>
    </div>

    <div class="m-16 hidden md:block mt-20 text-gray-400">
         <h2 class="text-4xl">Our Blogs</h2>
    </div>

    <section class="m-10 container mx-auto">
        <div class="m-4 md:m-0">

            @foreach ( $recentPosts->slice(0,30)->chunk(5) as $posts )

            <x-component3  :posts="$posts->values()"/>
            
            @endforeach


        </div>
    </section>
</body>
</html>