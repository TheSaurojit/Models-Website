<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>

    @include('components.layouts.header')

    <div class="max-w-2xl mx-auto p-4 mt-16">
        <div class="relative mb-6">
            <input type="text" 
                   placeholder="Search posts, people, or blogs..." 
                   class="w-full px-4 py-3 bg-gray-100 rounded-xl pl-10 focus:outline-none focus:ring-2 focus:ring-blue-100 transition-all duration-300"
            >
            <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
        </div>

        <div class="flex gap-2 mb-6 overflow-x-auto pb-2 scrollbar-hide">
            {{-- <button onclick="showSection('all')" class="px-4 py-2 bg-blue-500 text-white rounded-full text-sm font-medium">All</button> --}}
            <button onclick="showSection('models')" class="px-4 py-2 bg-blue-500 text-white rounded-full text-sm font-medium border  hover:text-black">Models</button>
            <button onclick="showSection('blogs')" class="px-4 py-2 bg-white text-gray-600 rounded-full text-sm font-medium border hover:bg-gray-50 hover:text-black">Blogs</button>
        </div>

        

        <div id="models-section" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="/imagess/hero.png" alt="Model" class="w-full h-64 object-cover rounded-t-xl">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-semibold text-gray-900">Emma Wilson</h3>
                        <span class="text-blue-500"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <p class="text-gray-500 text-sm mb-3">Fashion • Los Angeles</p>
                    <div class="flex justify-between text-sm text-gray-500">
                        <span>245K followers</span>
                    </div>
                </div>
            </div>
        
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="/imagess/hero.png" alt="Model" class="w-full h-64 object-cover rounded-t-xl">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-semibold text-gray-900">Alex Rivera</h3>
                        <span class="text-blue-500"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <p class="text-gray-500 text-sm mb-3">Fitness • Miami</p>
                    <div class="flex justify-between text-sm text-gray-500">
                        <span>182K followers</span>
                    </div>
                </div>
            </div>
        
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="/imagess/hero.png" alt="Model" class="w-full h-64 object-cover rounded-t-xl">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-semibold text-gray-900">Alex Rivera</h3>
                        <span class="text-blue-500"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <p class="text-gray-500 text-sm mb-3">Fitness • Miami</p>
                    <div class="flex justify-between text-sm text-gray-500">
                        <span>182K followers</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="blogs-section" class="grid grid-cols-1 gap-4 ">
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="/imagess/hero.png" alt="Blog" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-4">
                    <div class="flex items-center mb-3">
                        <img src="/imagess/hero.png" alt="Author" class="w-8 h-8 rounded-full">
                        <div class="ml-2">
                            <h3 class="font-semibold text-gray-900">The Fashion Diaries</h3>
                            <p class="text-gray-500 text-xs">By Sarah Johnson • 15 min read</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold mb-2">Summer Fashion Trends 2025</h2>
                    <p class="text-gray-600 text-sm mb-4">Discover the hottest trends that will dominate the fashion scene this summer...</p>
                    <div class="flex justify-between text-sm text-gray-500">
                        <div class="flex items-center space-x-4">
                            <span><i class="far fa-heart mr-1"></i> 3.2k</span>
                            <span><i class="far fa-comment mr-1"></i> 245</span>
                        </div>
                        <button class="text-blue-500"><i class="far fa-bookmark"></i></button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <img src="/imagess/hero.png" alt="Blog" class="w-full h-48 object-cover rounded-t-xl">
                <div class="p-4">
                    <div class="flex items-center mb-3">
                        <img src="/imagess/hero.png" alt="Author" class="w-8 h-8 rounded-full">
                        <div class="ml-2">
                            <h3 class="font-semibold text-gray-900">Lifestyle & Wellness</h3>
                            <p class="text-gray-500 text-xs">By Mike Chen • 8 min read</p>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold mb-2">Mindful Living in the Digital Age</h2>
                    <p class="text-gray-600 text-sm mb-4">Practical tips for maintaining balance and wellness in our connected world...</p>
                    <div class="flex justify-between text-sm text-gray-500">
                        <div class="flex items-center space-x-4">
                            <span><i class="far fa-heart mr-1"></i> 1.8k</span>
                            <span><i class="far fa-comment mr-1"></i> 132</span>
                        </div>
                        <button class="text-blue-500"><i class="far fa-bookmark"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.layouts.footer')


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
</html>