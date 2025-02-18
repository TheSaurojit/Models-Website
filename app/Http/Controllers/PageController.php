<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Celebrity;
use App\Models\FirstPost;
use App\Models\Posts;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function home(Request $request)
    // {
    //     return view('pages.index');
    // }

    // public function search(Request $request)
    // {
    //     $search = $request['search'];

    //     if (!$search) {

    //         $posts = Posts::all();

    //     } else {

    //         $posts = Posts::where('title', 'like', '%' . $search . '%')
    //             ->orWhere('description', 'like', '%' . $search . '%')
    //             ->with('category')
    //             ->latest()
    //             ->get();
    //     }

    //     $number = $posts->count();
        

    //     return view('pages.search', compact('posts', 'search' , 'number'));
    // }


       // public function category($category)
    // {

    //     $category = strtolower(implode(" ", explode('-', $category)));

    //     $catExist = Category::where('category', $category)->firstOrFail();

    //     $posts = Posts::where('category_id', $catExist->id)->latest()->get();

    //     return view('pages.category', compact('category', 'posts'));
    // }


    public function blog($slug)
    {

        $post = Posts::where('slug', $slug)->with('celebrity')->firstOrFail();


        $celebrity = $post->celebrity;

        $celebId = $post->celebrity->id ;

        $relatedPosts = Posts::where('celebrity_id', $celebId)->where('id', '!=', $post->id)->latest()->limit(6)->get();

        return view('pages.blog', compact('post',  'celebrity', 'relatedPosts'));
    }

    public function allBlogs()
    {  
        return view('pages.blogs');
    }

 

    public function allCelebrities()
    {  
        return view('pages.models') ;
    }

    public function celebProfile(string $name)
    { 
        $celebrity = Celebrity::where('name',$name)->with(['posts'])->firstOrFail() ; 


        return view('pages.profile',compact('celebrity')) ;
    }

    public function search(Request $request)
    {
        return view('pages.search');
    }

    public function home(Request $request)
    {
        return view('pages.home');
    }


   
}
