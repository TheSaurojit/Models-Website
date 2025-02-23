<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CelebrityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/', [PageController::class , 'home'])->name('home');
Route::get('/search', [PageController::class , 'search'])->name('search');
Route::get('/models', [PageController::class, 'allCelebrities'])->name('models');
Route::get('/profile/{name}', [PageController::class, 'celebProfile'])->name('profile');
Route::get('/blog/{slug}',[PageController::class, 'blog'])->name('blog') ;
Route::get('/blogs', [PageController::class, 'allBlogs'])->name('all-blogs');


Route::post('/contact-us',[ContactController::class ,'create'])->name('contact.create');


Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/legal', 'pages.legal');
Route::view('/privacy', 'pages.privacy');
Route::view('/helpFaq', 'pages.helpFaq');


// Route::get('/login', function () {

    // User::find(1)->update(['email' => 'modelsAdmin@gmail.com' ,'password' => Hash::make('modelsAdmin@Pass@2025')]);
    
    // })->name('admin');
    
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');


// Route::prefix('auth')->group(function () {

Route::prefix('auth')->middleware('auth')->group(function () {
    

    Route::get('/', function () {

         return view('admin.home');
    
    })->name('admin.index');



    Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');


    Route::controller(PostController::class)->group( function(){

        Route::post('/image/upload', 'imageUpload')->name('imageUpload');
        Route::post('/image/remove', 'imageRemove')->name('imageRemove') ;

        Route::get('/make-first-post/{id}' , 'makeFirstPost')->name('first_post') ;
        // Route::get('/make-second-post/{id}' , 'makeSecondPost')->name('second_post') ;


        Route::get('/create-post','createView')->name('create-post');
        Route::post('/create-post', 'create')->name('create-post');

    
        Route::get('/update-post/{id}','updateView')->name('update-post');
        Route::post('/update-post/{id}','update')->name('update-post');

    
        Route::get('/delete-post/{id}', 'deletePost')->name('delete-post');




        Route::get('/all-trash-posts', 'trashPosts' )->name('trash-posts');

        Route::get('/all-delete-trash', 'allDeleteTrashPosts' )->name('all-delete-trash');

        Route::get('/all-delete-posts', 'allDeletePosts' )->name('all-delete-posts');



        Route::get('/delete-trash-posts/{id}', 'deleteTrashPosts' )->name('delete-trash-posts');
        Route::get('/restore-trash-posts/{id}', 'restoreTrashPosts' )->name('restore-trash-posts');


    
        Route::get('/all-posts','allPosts')->name('all-posts');
    
    });



    Route::controller(CategoryController::class)->group( function(){ 

        Route::get('/create-category',  'createView')->name('create-category');
        Route::post('/create-category',  'create')->name('create-category');

        Route::get('/update-category/{id}',  'updateView')->name('update-category');
        Route::post('/update-category/{id}',  'update')->name('update-category');


        Route::get('/delete-category/{id}',  'delete')->name('delete-category');


        Route::get('/all-category' ,  'allCategory')->name('all-category');


    });

    Route::controller(AuthorController::class)->group( function(){

        Route::get('/create-author',  'createView')->name('create-author');
        Route::post('/create-author',  'create')->name('create-author');

        
        Route::get('/update-author/{id}',  'updateView')->name('update-author');
        Route::post('/update-author/{id}',  'update')->name('update-author');


        Route::get('/delete-author/{id}',  'delete')->name('delete-author');


        Route::get('/all-author' ,  'allAuthor')->name('all-author');

    }) ;

    Route::controller(CelebrityController::class)->group( function(){

        Route::get('/create-celebrity',  'createView')->name('create-celebrity');
        Route::post('/create-celebrity',  'create')->name('create-celebrity');

        
        Route::get('/update-celebrity/{id}',  'updateView')->name('update-celebrity');
        Route::post('/update-celebrity/{id}',  'update')->name('update-celebrity');


        Route::get('/delete-celebrity/{id}',  'delete')->name('delete-celebrity');


        Route::get('/all-celebrity' ,  'allCelebrity')->name('all-celebrity');

    }) ;


    Route::controller(ContactController::class)->group( function(){
       
        Route::get('/delete-contact/{id}',  'delete')->name('delete-contact');

        Route::get('/view-contact/{id}',  'adminView')->name('view-contact');

        Route::get('/all-contact' ,  'allAdminView')->name('all-contact');

    }) ;





});





