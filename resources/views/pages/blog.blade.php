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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>About Blogs</title>
</head>


      @php

          $title = $post->title ;
          $description = $post->description ;
          $image = $post->thumbnail ;
          $caption = $post->image_caption ;
          $url = route('blog',['slug' => $post->slug]) ;
          
      @endphp
<body>
    @include('components.layouts.header')
    <div class="max-w-7xl mt-20 mx-auto p-6 bg-[#F4F4F4]">
        <div class="mb-8">
            <div class="flex-col md:flex-row gap-10">
                <div class="w-full max-w-4xl mx-auto text-center">
                    <img src="{{ $image }}" alt="Model" class="w-full h-full object-cover">
                    <p class="mt-2 text-sm text-gray-600">{{ $caption }}</p>
                </div>
                
                <div class=" mt-7 text-center">
                    <h1 class="text-2xl font-semi-bold mb-4">{{ $title }}</h1>

                    <p class="text-[15px] text-gray-700">
       
                      {{ $description }}
                    </p>
                </div>
            </div>
        </div>

        <div>
          
            
            <p class="text-lg m-6 text-gray-700">
              {!! $post->blog !!}
            </p>
        </div>
    </div>

    <h2 class="text-7xl ml-12 mt-10 text-[#C3C3C3]">More Blogs</h2>

    <div class="swiper mySwiper p-6 md:p-12">
      <div class="swiper-wrapper">

        @foreach ( $relatedPosts as $post )

        @php
            $title = $post->title ;
            $image = $post->thumbnail ;
            $url = route('blog',['slug' => $post->slug]) ;
            
        @endphp
  
          <div class="swiper-slide flex flex-col items-start">
            <a href="{{ $url }}">
              <img src="{{ $image }}" class="w-96 h-96">  
              <h2 class="text-lg font-semibold mt-4">{{ $title }}</h2>
              <p class="text-gray-600">{{ $description }}</p>
            </a>
          </div>

        @endforeach
  
      </div>
    </div>

    @include('components.layouts.footer')


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