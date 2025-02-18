<div class="swiper mySwiper p-6 md:p-12">
    <div class="swiper-wrapper">

        @foreach ( $allCelebrity as $model )

            @php

                $name = $model["name"] ;
                $bio = $model["bio"] ;
                $image = $model["image-1"] ;
                $url = route('profile',['name'=>$name]) ;


            @endphp


            <div class="swiper-slide flex flex-col items-start">
                <a href="{{ $url }}">
                <img src="{{ $image }}" class="w-96 h-96">  
                <h2 class="text-lg font-semibold mt-4">{{ $name }}</h2>
                </a>
            </div>

        @endforeach
    </div>
</div>