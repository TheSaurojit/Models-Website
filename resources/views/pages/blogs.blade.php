<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.layouts.header')

    <div class="m-16 mt-20 text-gray-400">
         <h2 class="text-3xl ">Our Blogs</h2>
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