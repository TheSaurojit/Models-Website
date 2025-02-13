<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CelebrityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {

//     $hashed =  bcrypt('123') ;

//     dd($hashed);

// User::create([
//         'name' => 'admin',
//         'email' => 'admin@gmail.com',
//         'password' => $hashed 
//     ]);

// $2y$10$hgehOwMjsBw4sCawp7WWBekvS.ZS54/BwZwyWnl1KK3gAmy8wkz3S



// blue $2y$10$VasnzOYp0aqI49QY3Z00xO0M4fG.adwSBgufNe8wmYm.W3fI5/sFe

// })->name('admin');


Route::view('/', 'pages.home');
Route::view('/profile', 'pages.profile');
Route::view('/blogs', 'pages.blogs');
Route::view('/blog', 'pages.blogfull');
Route::view('/search', 'pages.search');
Route::view('/about', 'pages.about');
Route::view('/models', 'pages.models');
Route::view('/contact', 'pages.contact');
Route::view('/legal', 'pages.legal');
Route::view('/privacy', 'pages.privacy');
Route::view('/helpFaq', 'pages.helpFaq');


// Route::view('/','admin.home') ;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');


Route::prefix('auth')->group(function () {

// Route::prefix('auth')->middleware('auth')->group(function () {
    

    Route::get('/', function () {

         return view('admin.dashboard');
    
    })->name('admin.index');



    Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');



    Route::controller(PostController::class)->group( function(){

        Route::post('/image/upload', 'imageUpload')->name('imageUpload');
        Route::post('/image/remove', 'imageRemove')->name('imageRemove') ;

        Route::get('/make-first-post/{id}' , 'makeFirstPost')->name('first_post') ;
        Route::get('/make-second-post/{id}' , 'makeSecondPost')->name('second_post') ;



        Route::get('/create-post','createEditor')->name('create-post');
        Route::post('/create-post', 'createPost')->name('create-post');

    
        Route::get('/update-post/{id}','updateEditor')->name('update-post');
        Route::post('/update-post/{id}','updatePost')->name('update-post');

    
        Route::get('/delete-post/{id}', 'deletePost')->name('delete-post');




        Route::get('/trash-posts', 'trashPosts' )->name('trash-posts');
        Route::get('/delete-trash-posts/{id}', 'deleteTrashPosts' )->name('delete-trash-posts');
        Route::get('/restore-trash-posts/{id}', 'restoreTrashPosts' )->name('restore-trash-posts');


    
        Route::get('/all-posts','showPosts')->name('posts');
    
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




});





