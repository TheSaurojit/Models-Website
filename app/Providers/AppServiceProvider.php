<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Category;
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

        // view()->share('allAuthor', Author::all());

        // view()->share('recentPosts', Posts::with('category')->latest()
        // ->limit(10)
        // ->get());

        
        // view()->share('firstPost',FirstPost::with('post')->find(1)?->post ) ;

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

        // view()->share('musicPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'music');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());
                                                    
        // view()->share('lifestylePosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'lifestyle');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());

        // view()->share('fashionPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'fashion');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());

        // view()->share('entertainmentPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'entertainment');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());

                                                        

        // view()->share('royalPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'royal family');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());

        // view()->share('gossipPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'gossip');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());

        // view()->share('tvPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'tv & movies');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());

    }
}
