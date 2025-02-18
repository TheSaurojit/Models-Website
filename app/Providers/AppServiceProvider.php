<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Celebrity;
use App\Models\FirstPost;
use App\Models\Posts;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // view()->share('allCategory', Category::with(['posts'])->get());

        view()->share('allCelebrity', Celebrity::with(['posts'])->get());

        view()->share('recentPosts', Posts::with('celebrity')->latest()->limit(50)->get());



        // view()->share('allAuthor', Author::all());

        // view()->share('recentPosts', Posts::with('category')->latest()
        // ->limit(10)
        // ->get());

        
        view()->share('firstPost',FirstPost::with('post')->find(1)?->post ) ;

        // view()->share('secondPost',FirstPost::with('post')->find(2)?->post ) ;

        // view()->share('randomPosts',Posts::inRandomOrder() 
        //                             ->limit(10)       
        //                             ->get());
        


        // view()->share('recentPosts', Posts::with('category')->latest()
        //                                                     ->limit(15)
        //                                                     ->get());


        // view()->share('glamPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'glam zone');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(4)
        //                                                 ->get());


    }
}
