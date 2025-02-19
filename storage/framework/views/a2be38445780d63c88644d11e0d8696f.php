<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  </head>
  <body>

    <?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="max-w-2xl mx-auto p-4 mt-16">
        <div class="relative mb-6">
            <input type="text" 
                   placeholder="Search posts, people, or blogs..." 
                   class="w-full px-4 py-3 bg-gray-100 rounded-xl pl-10 focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all duration-300"
            >
            <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
        </div>

        <div class="flex gap-2 mb-6 overflow-x-auto pb-2 scrollbar-hide">
            
            <button onclick="showSection('models')" class="px-4 py-2 bg-blue-500 text-white rounded-full text-sm font-medium border  hover:text-black">Models</button>
            <button onclick="showSection('blogs')" class="px-4 py-2 bg-white text-gray-600 rounded-full text-sm font-medium border hover:bg-gray-50 hover:text-black">Blogs</button>
        </div>

        

        <div id="models-section" class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <?php $__currentLoopData = $allCelebrity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php

                $name = $model["name"] ;
                $bio = $model["bio"] ;
                $image = $model["image-1"] ;
                $url = route('profile',['name'=>$name]) ;


            ?>
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <a href="<?php echo e($url); ?>">

                        <img src="<?php echo e($image); ?>" alt="Model" class="w-full h-64 object-cover rounded-t-xl">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="font-semibold text-gray-900"><?php echo e($name); ?></h3>
                                <span class="text-blue-500"><i class="fas fa-check-circle"></i></span>
                            </div>
                            
                        </div>
                    </a>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
           


        </div>

        <div id="blogs-section" class="grid grid-cols-1 gap-4 ">
            <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php
                $title = $post->title ;
                $description = $post->description ;

                $image = $post->thumbnail ;
                $url = route('blog',['slug' => $post->slug]) ;
                
            ?>
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <a href="<?php echo e($url); ?>">
                    <img src="<?php echo e($image); ?>" alt="Blog" class="w-full h-48 object-cover rounded-t-xl ">
                    <div class="p-4">
                    
                        <h2 class="text-xl font-bold mb-2"><?php echo e($title); ?></h2>
                        <p class="text-gray-600 text-sm mb-4"><?php echo e($description); ?></p>
                        <div class="flex justify-between text-sm text-gray-500">
                            
                            <button class="text-blue-500"><i class="far fa-bookmark"></i></button>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    <?php echo $__env->make('components.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <script>
       document.addEventListener('DOMContentLoaded', function() {
    showSection('models');
    
    const searchInput = document.querySelector('input[placeholder="Search posts, people, or blogs..."]');
    const modelsSection = document.getElementById('models-section');
    const blogsSection = document.getElementById('blogs-section');
    
    function filterModels(searchValue) {
        let modelsFound = false;
        const models = document.querySelectorAll('#models-section > div.bg-white');
        
        models.forEach(model => {
            const modelName = model.querySelector('h3')?.textContent?.toLowerCase() || '';
            const modelDesc = model.querySelector('p')?.textContent?.toLowerCase() || '';
            
            if (modelName.includes(searchValue) || modelDesc.includes(searchValue)) {
                model.style.display = 'block';
                modelsFound = true;
            } else {
                model.style.display = 'none';
            }
        });
        
        showNoResultsMessage('models', modelsFound);
        return modelsFound;
    }
    
    function filterBlogs(searchValue) {
        let blogsFound = false;
        const blogs = document.querySelectorAll('#blogs-section > div.bg-white');
        
        blogs.forEach(blog => {
            const blogTitle = blog.querySelector('h2')?.textContent?.toLowerCase() || '';
            const blogAuthor = blog.querySelector('.ml-2 h3')?.textContent?.toLowerCase() || '';
            const blogDesc = blog.querySelector('p.text-gray-600')?.textContent?.toLowerCase() || '';
            
            if (blogTitle.includes(searchValue) || blogAuthor.includes(searchValue) || blogDesc.includes(searchValue)) {
                blog.style.display = 'block';
                blogsFound = true;
            } else {
                blog.style.display = 'none';
            }
        });
        
        showNoResultsMessage('blogs', blogsFound);
        return blogsFound;
    }
    
    function showNoResultsMessage(section, itemsFound) {
        const sectionElement = document.getElementById(`${section}-section`);
        let noResultsMessage = document.getElementById(`no-results-${section}`);
        
        if (!noResultsMessage) {
            noResultsMessage = document.createElement('div');
            noResultsMessage.id = `no-results-${section}`;
            noResultsMessage.className = 'text-center py-8 text-gray-500 w-full col-span-full';
            noResultsMessage.innerHTML = `
                <div class="flex flex-col items-center">
                    <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <p class="text-lg font-medium">No ${section} found</p>
                    <p class="text-sm text-gray-400">Try adjusting your search terms</p>
                </div>
            `;
            sectionElement.appendChild(noResultsMessage);
        }
        
        noResultsMessage.style.display = itemsFound ? 'none' : 'block';
        
        if (!itemsFound) {
            sectionElement.classList.add('items-center');
        } else {
            sectionElement.classList.remove('items-center');
        }
    }
    
    function handleSearch() {
        const searchValue = searchInput.value.trim().toLowerCase();
        
        if (searchValue === '') {
            document.querySelectorAll('#models-section > div.bg-white, #blogs-section > div.bg-white').forEach(item => {
                item.style.display = 'block';
            });
            document.querySelectorAll('[id^="no-results-"]').forEach(msg => msg.style.display = 'none');
            return;
        }
        
        const activeSection = document.querySelector('#models-section').classList.contains('hidden') ? 'blogs' : 'models';
        
        if (activeSection === 'models') {
            filterModels(searchValue);
        } else {
            filterBlogs(searchValue);
        }
    }
    
    searchInput.addEventListener('input', handleSearch);
    
    const sectionButtons = document.querySelectorAll('button[onclick^="showSection"]');
    sectionButtons.forEach(button => {
        button.addEventListener('click', () => {
            searchInput.value = '';
            handleSearch();
        });
    });
});

function showSection(section) {
    document.getElementById('models-section').classList.add('hidden');
    document.getElementById('blogs-section').classList.add('hidden');
    
    document.getElementById(section + '-section').classList.remove('hidden');
    
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        if (button.textContent.toLowerCase().includes(section)) {
            button.classList.remove('bg-white', 'text-gray-600');
            button.classList.add('bg-blue-500', 'text-white');
        } else if (button.textContent !== 'All' && !button.textContent.toLowerCase().includes(section)) {
            button.classList.remove('bg-blue-500', 'text-white');
            button.classList.add('bg-white', 'text-gray-600');
        }
    });
}
    </script>
  </body>
</html><?php /**PATH /home/orcas/Desktop/Projects/Models-Website/resources/views/pages/search.blade.php ENDPATH**/ ?>