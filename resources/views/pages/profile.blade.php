<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="icon" href="/imagess/M.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ Str::title($celebrity["name"]) }} | {{ env("APP_NAME") }}</title>

</head>
<body>
    @include('components.layouts.header')

    @php
        $name = $celebrity["name"] ;
        $bio = $celebrity["bio"] ;
        $image = $celebrity["image-1"] ;
        $gender = $celebrity["gender"] ;

        $posts = $celebrity->posts ;
        

    @endphp



    <section class="w-full px-4 md:px-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row gap-8 mt-4">
                <div class="block md:hidden mt-14">
                    <div class="flex">
                        <h1 class="text-2xl whitespace-nowrap text-[#C3C3C3] mt-6">{{ $name }}</h1>
                        <div class="max-w-md mt-4 ml-auto">
                            <div class="flex gap-3">
                                <i class="fa-brands fa-instagram"></i>
                                <a href="" class="mt-[-4px]">@Aria Forsa</a>
                            </div>
                      
                        </div>
                    </div>
                </div>

                <div class="md:hidden w-full">
                    <div class="flex justify-center">
                        <img src="{{ $image }}" 
                             alt="Main model image" 
                             id="mainImageMobile"
                             class="w-full max-w-md object-cover transition-opacity duration-300">
                    </div>
                </div>

                <div class="w-full md:w-auto mt-7">
                    <div class="hidden md:flex space-x-4 md:space-y-4 flex-row md:flex-col md:mt-14">
                        <img src="{{ $celebrity['image-1'] }}" 
                             alt="Model thumbnail 1" 
                             class="w-[250px] md:ml-4 h-[123px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                             onclick="updateMainImage(this.src)">
                        <img src="{{ $celebrity['image-2'] }}" 
                             alt="Model thumbnail 2" 
                             class="w-[250px] h-[123px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                             onclick="updateMainImage(this.src)">
                        <img src="{{ $celebrity['image-3'] }}" 
                             alt="Model thumbnail 3" 
                             class="w-[250px] h-[123px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                             onclick="updateMainImage(this.src)">
                        <img src="{{ $celebrity['image-4'] }}" 
                             alt="Model thumbnail 4" 
                             class="w-[250px] h-[123px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                             onclick="updateMainImage(this.src)">
                    </div>

                    <div class="md:hidden w-full">
                        <div class="relative w-full">
                            <div class="overflow-x-auto pb-4 scrollbar-hide">
                                <div class="flex gap-4 min-w-max mx-auto">
                                    <div class="w-24 flex-shrink-0">
                                        <img src="{{ $celebrity['image-1'] }}" 
                                        alt="Model thumbnail 1" 
                                             class="w-full h-[100px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                                             onclick="updateMainImage(this.src)">
                                    </div>
                                    <div class="w-24 flex-shrink-0">
                                        <img src="{{ $celebrity['image-2'] }}" 
                                        alt="Model thumbnail 2" 
                                             class="w-full h-[100px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                                             onclick="updateMainImage(this.src)">
                                    </div>
                                    <div class="w-24 flex-shrink-0">
                                        <img src="{{ $celebrity['image-3'] }}" 
                                        alt="Model thumbnail 3" 
                                             class="w-full h-[100px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                                             onclick="updateMainImage(this.src)">
                                    </div>
                                    <div class="w-24 flex-shrink-0">
                                        <img src="{{ $celebrity['image-4'] }}" 
                                        alt="Model thumbnail 4" 
                                             class="w-full h-[100px] object-cover cursor-pointer thumbnail-img hover:opacity-80 transition-opacity"
                                             onclick="updateMainImage(this.src)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block md:mt-20">
                    <div class="w-[620px] h-[540px] flex justify-center items-center overflow-hidden">
                        <img src="{{ $image }}" 
                             alt="Main model image" 
                             id="mainImage"
                             class="w-[600px] h-[530px] object-cover transition-opacity duration-300">
                    </div>
                </div>

                <div class="md:mt-20 w-full">
                    <div class="hidden md:block">
                        <h1 class="text-4xl whitespace-nowrap text-[#C3C3C3] text-center md:ml-[-100px]">{{ $name }}</h1>
                    </div>

                    <div class="flex justify-center md:justify-start gap-52 mt-5">
                        <div>
                            <h4>{{ $name }}</h4>
                            <p class="text-[#696A6E]">Model</p>
                        </div>
                        <div class="md:ml-20">
                            <h4>Gender</h4>
                            <p class="text-[#696A6E]">{{ $gender }}</p>
                        </div>
                    </div>

                    <div class="mt-7 mx-auto">
                        <h4 class="text-center md:text-left">Previous works</h4>
                        <div class="max-w-md mx-auto md:mx-0 mt-4">
                            <div class="swiper mobile-swiper">
                                <div class="swiper-wrapper">

                                    @foreach ( $posts->slice(0,3) as $post )

                                    @php
                                        $title = $post->title ;
                                        $image = $post->thumbnail ;
                                        $url = route('blog',['slug' => $post->slug]) ;
                                        
                                    @endphp

                                    <div class="swiper-slide flex flex-col items-start">
                                            <a href="{{ $url }}">
                                            <img src="{{ $image }}" class="w-72 h-36">  
                                            <h2 class="text-xs font-semibold mt-4">{{ $title }} </h2>
                                        </a>
                                        </div>

                                    @endforeach

                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 max-w-md mx-auto md:mx-0">
                        <h3 class="md:text-left">About</h3>
                        <p class="text-[#696A6E] text-lg md:text-left md:px-0">
                           {{$bio}}
                        </p>
                    </div>

                    <div class="max-w-md mt-4 hidden md:block">
                        <div class="flex gap-3">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="{{ $celebrity->instagram }}" class="mt-[-4px]">@ {{ $name }}</a>
                        </div>
                        {{-- <div class="flex gap-3 mt-2">
                            <i class="fa-brands fa-facebook"></i>
                            <p class="mt-[-4px]">@Aria Forsa</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mt-20 mb-20">
            <div class="swiper">
                <div class="swiper-wrapper">

                    @foreach ( $posts->slice(3,6) as $post )

                    @php
                        $title = $post->title ;
                        $image = $post->thumbnail ;
                        $url = route('blog',['slug' => $post->slug]) ;
                        
                    @endphp


                        <div class="swiper-slide flex flex-col items-start">
                            <a href="{{ $url }}">

                                <div class="flex bg-[#F4F4F4] text-left gap-4">
                                    <img src="{{ $image }}" class="w-72 h-72">  
                                    <h2 class="text-sm font-semibold mt-24">
                                        {{ $title }}
                                    </h2>
                                </div>

                            </a>
                        </div>


                    @endforeach

                 
                </div>
            </div>
        </div>
    </section>

    @include('components.layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        function updateMainImage(newSrc) {
            const mainImage = document.getElementById('mainImage');
            const mainImageMobile = document.getElementById('mainImageMobile');
            
            if (mainImage) mainImage.style.opacity = '0';
            if (mainImageMobile) mainImageMobile.style.opacity = '0';
            
            setTimeout(() => {
                if (mainImage) {
                    mainImage.src = newSrc;
                    mainImage.style.opacity = '1';
                }
                if (mainImageMobile) {
                    mainImageMobile.src = newSrc;
                    mainImageMobile.style.opacity = '1';
                }
            }, 300);

            const thumbnails = document.querySelectorAll('.thumbnail-img');
            thumbnails.forEach(thumb => {
                if (thumb.src === newSrc) {
                    thumb.classList.add('ring-2', 'ring-blue-500');
                } else {
                    thumb.classList.remove('ring-2', 'ring-blue-500');
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            const mainImage = document.getElementById('mainImage');
            const mainImageMobile = document.getElementById('mainImageMobile');
            if (mainImage) mainImage.style.opacity = '1';
            if (mainImageMobile) mainImageMobile.style.opacity = '1';

            const mobileSwiper = new Swiper(".mobile-swiper", {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 10,
                autoplay: false,
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 10
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 10
                    }
                }
            });

            const mainSwiper = new Swiper('.swiper', {
                loop: true,
                effect: 'slide',
                speed: 800,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    }
                }
            });
        });
    </script>
</body>
</html>