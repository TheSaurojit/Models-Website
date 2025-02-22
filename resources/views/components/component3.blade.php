<div class="flex flex-col md:flex-row gap-6 md:mt-[-20px] md:gap-5">

     @if (isset($posts[0]) )

        @php
        $post = $posts[0] ;
        $title = $post->title ;
        $image = $post->thumbnail ;
        $url = route('blog',['slug' => $post->slug]) ;
        
        @endphp
        
        <a href="{{$url}}">
        <div class="bg-[#F4F4F4] md:w-[780px] xl:w-[880px] 2xl:w-[1020px] h-64 relative overflow-hidden">
          <div class="flex flex-col md:flex-row h-full">
            <div class="text-sm p-3 flex-1 justify-center md:justify-start flex items-center">
              <p class="text-center md:text-left">{{ $title }}</p>
            </div>
            <div class="flex-shrink-0 m-3 w-full md:w-auto">
              <img src="{{ $image }}" alt="Model" class="md:w-84 w-full h-48 md:h-full object-cover">
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
    
        
        <div class="bg-[#F4F4F4] md:h-[460px] md:w-[550px] xl:w-[570px] 2xl:w-[530px] 2xl:h-[480px] relative overflow-hidden">
          <div class="m-3">
            <a href="{{$url}}">
            <img src="{{ $image }}" alt="Model" class="w-full md:w-84 h-72 object-cover">
            <div class="text-sm mt-4 p-3 flex justify-center items-center text-center">
              <p class="text-center">{{ $title }}</p>
            </div>
            </a>
          </div>
        </div>

      @endif

    </div>

   
  
      <div class="flex flex-col md:flex-row gap-6 md:gap-10 mt-10 2xl:mt-[-200px] md:mt-[-180px]">

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
              <div class="text-sm p-3 flex items-center justify-center text-center">
                <p>{{ $title }}</p>
              </div>
              <div class="mt-4">
                <img src="{{ $image }}" alt="Model" class="w-full md:w-84 h-64 object-cover">
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
          <div class="bg-[#F4F4F4] w-full md:w-[460px] 2xl:w-[484px] h-auto md:h-52 relative overflow-hidden">
            <div class="flex flex-col md:flex-row gap-4">
              <div class="w-full md:w-1/2">
                <img src="{{ $image }}" alt="Model" class="w-full h-48 md:h-64 object-cover">
              </div>
              <div class="text-sm p-3 flex justify-center md:justify-start items-center text-center w-full md:w-1/2">
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
      <div class="bg-[#F4F4F4] md:mt-[-100px] 2xl:mt-[-100px] w-full md:w-[500px] xl:w-[830px] 2xl:w-[1020px] h-64 relative overflow-hidden mt-6 mb-10 ml-auto">
        <div class="flex flex-col md:flex-row h-full">
          <div class="text-sm p-3 flex-1 justify-center md:justify-start flex items-center">
            <p class="text-center md:text-left">{{ $title }}</p>
          </div>
          <div class="flex-shrink-0 m-3 w-full md:w-auto">
            <img src="{{ $image }}" alt="Model" class="md:w-84 w-full h-48 md:h-full object-cover">
          </div>
        </div>
      </div>
    </a>
    @endif


