<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Category;
use App\Models\Celebrity;
use App\Models\Posts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->model();

        $blog = file_get_contents(__DIR__."/blog.txt");

        $imgArr=["/images/gratisography-cyber-kitty-1170x780.jpg", "/images/adam-beachfront-dubai-mag.jpg"] ;


        for ( $i = 0 ; $i < 50 ; $i++)
        {
            $random =  rand(10000 , 999999) ;
            $title = "title for post - " . $random ;
   
            $fileName =  $imgArr[rand(0,1)];

            Posts::create([
                'trending' => 0 , 
                'title' => $title ,
                'slug'  => Str::slug($title),
                'description' => "Description",
                'keywords' =>"keyyy",
                'image_caption' => "imageeeee capppppption" ,
                'thumbnail' => $fileName ,
                'blog' => $blog,
                'celebrity_id' => 1 ,
            ]);
        } 


    }



    public function model()
    {
        if(!Celebrity::exists()){

            Celebrity::create([
                        'name' => 'sayan' ,
                        'bio' => 'biooo' ,
                        'gender' => "Male" ,
                        'instagram' => "instaa",
                        "image-1" => "/images/adam-beachfront-dubai-mag.jpg" ,
                        "image-2" => "/images/adam-beachfront-dubai-mag.jpg" ,
                        "image-3" => "/images/adam-beachfront-dubai-mag.jpg" ,
                        "image-4" => "/images/adam-beachfront-dubai-mag.jpg" ,
                    ]) ;

                   
        }  
    }




}
