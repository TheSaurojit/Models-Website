<div class="flex flex-col md:flex-row gap-6 md:gap-20">

     @if (isset($posts[0]) )

        @php
        $post = $posts[0] ;
        $title = $post->title ;
        $image = $post->thumbnail ;
        $url = route('blog',['slug' => $post->slug]) ;
        
        @endphp
        
        <a href="{{$url}}">
        <div class="bg-[#F4F4F4] w-full md:w-[780px] xl:w-[880px] 2xl:w-[980px] h-64 relative overflow-hidden">
          <div class="flex flex-col md:flex-row h-full">
            <div class="text-sm p-3 flex-1 flex items-center">
              <p class="text-center md:text-left">{{ $title }}</p>
            </div>
            <div class="flex-shrink-0 m-3 w-full md:w-auto">
              <img src="{{ $image }}" alt="Model" class="w-full h-48 md:h-full object-cover">
            </div>
          </div>
        </div>
        </a>

      @endif


     @if (isset($posts[1]) )
    
        @php
    
        $post = $posts[1] ;
        $title = $post->title ;
        $image = $post->thumbnail ;
        $url = route('blog',['slug' => $post->slug]) ;
        
        @endphp
    
        
        <div class="bg-[#F4F4F4] h-auto md:h-[480px] w-full md:w-96 xl:w-[484px] 2xl:w-[530px] relative overflow-hidden">
          <div class="m-3">
            <a href="{{$url}}">
            <img src="{{ $image }}" alt="Model" class="w-full object-cover">
            <div class="text-sm mt-4 p-3 flex items-center text-center">
              <p>{{ $title }}</p>
            </div>
            </a>
          </div>
        </div>

      @endif

    </div>

   
  
      <div class="flex flex-col md:flex-row gap-6 md:gap-10 mt-6 md:mt-[-200px]">

       @if (isset($posts[2]) )
    
          @php
      
          $post = $posts[2] ;
          $title = $post->title ;
          $image = $post->thumbnail ;
          $url = route('blog',['slug' => $post->slug]) ;
          
          @endphp

<a href="{{$url}}">
          <div class="bg-[#F4F4F4] w-full md:w-96 2xl:w-[484px] relative overflow-hidden">
            <div class="m-3">
              <div class="text-sm p-3 flex items-center text-center">
                <p>{{ $title }}</p>
              </div>
              <div class="mt-4">
                <img src="{{ $image }}" alt="Model" class="w-full object-cover">
              </div>
            </div>
          </div>
</a>

        @endif


       @if (isset($posts[3]) )
    
          @php
      
          $post = $posts[3] ;
          $title = $post->title ;
          $image = $post->thumbnail ;
          $url = route('blog',['slug' => $post->slug]) ;
          
          @endphp
      
      <a href="{{$url}}">
          <div class="bg-[#F4F4F4] w-full md:w-96 2xl:w-[484px] h-auto md:h-52 relative overflow-hidden">
            <div class="flex flex-col md:flex-row gap-4">
              <div class="w-full md:w-1/2">
                <img src="{{ $image }}" alt="Model" class="w-full h-48 md:h-64 object-cover">
              </div>
              <div class="text-sm p-3 flex items-center text-center w-full md:w-1/2">
                <p>{{ $title }}</p>
              </div>
            </div>
          </div>
      </a>
        @endif



      </div>

  

   @if (isset($posts[4]) )
    
      @php

      $post = $posts[4] ;
      $title = $post->title ;
      $image = $post->thumbnail ;
      $url = route('blog',['slug' => $post->slug]) ;
      
      @endphp
      <a href="{{$url}}">
      <div class="bg-[#F4F4F4] w-full md:w-[480px] xl:w-[830px] 2xl:w-[980px] h-64 relative overflow-hidden mt-6 md:mt-[-70px] mb-10 ml-auto">
        <div class="flex flex-col md:flex-row h-full">
          <div class="text-sm p-3 flex-1 flex items-center">
            <p class="text-center md:text-left">{{ $title }}</p>
          </div>
          <div class="flex-shrink-0 m-3 w-full md:w-auto">
            <img src="{{ $image }}" alt="Model" class="w-full h-48 md:h-full object-cover">
          </div>
        </div>
      </div>
    </a>
    @endif


