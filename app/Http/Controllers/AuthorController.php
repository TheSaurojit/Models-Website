<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{


    public function createView()
    {
        return view('admin.author.create-author');
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => ['required'] ,
            'bio' => ['required'] ,
            'image' => ['required', 'image']
           ]) ;

           $file = $request->file('image') ;

           $authorImagePath = FileUploader::uploadFile($file);

        try {

            Author::create([
                'name' => $request->input('name') ,
                'bio' => $request->input('bio') ,
                'image' => $authorImagePath 
            ]) ; 

            return redirect()->route('all-author')->with('success', 'Author Created');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors("Some error occured ");
        }
    }


    public function updateView( Author $id)
    {
        $author = $id ;

        return view('admin.author.update-author',compact('author')) ;

    }

    public function update(Request $request , Author $id)
    {

        $request->validate([
            'name' => 'required' ,
            'bio' => 'required' ,
        ]) ;

        try {
            
            $updatedData = $request->only(['name', 'bio']);

            $file = $request->file('image') ;

            if ($file) {

                $authorImagePath = FileUploader::uploadFile($file);

                $updatedData['image'] = $authorImagePath;
            }
        
            $id->update($updatedData);

            return redirect()->route('all-author')->with('success', 'Author Updated');

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors("Some error occured ");

        }
    }
  
    public function delete( Author $id )
    {
        $id->delete() ;

        return redirect()->route('all-author')->with('success', 'Author Deleted');


    }

    public function all_author()
    {
        $authors = Author::all() ;

        return view('admin.author.all-author',compact('authors')) ;
    }


}
