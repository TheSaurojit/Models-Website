<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="icon" href="/imagess/M.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Models</title>
</head>
<body>
    @include('components.layouts.header')
    
   
    <div>
        <div class="min-h-screen grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 mt-28 p-4 md:ml-5">

                @foreach ( $allCelebrity as $model )

                @php

                    $name = $model["name"] ;
                    $bio = $model["bio"] ;
                    $image = $model["image-1"] ;
                    $url = route('profile',['name'=>$name]) ;


                @endphp

                    <x-component2 :name="$name" :bio="$bio" :image="$image" :url="$url" />
                    
                @endforeach
        
        </div>


    </div>

    @include('components.layouts.footer')

</body>
</html>
