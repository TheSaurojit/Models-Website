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
        <x-component3 />
        <x-component3 />

        </div>
    </section>
</body>
</html>