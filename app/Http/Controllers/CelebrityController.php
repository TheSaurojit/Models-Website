<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;
use App\Models\Celebrity;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{

    public function createView()
    {
        return view('admin.celebrity.create-celebrity');
    }

    public function create(Request $request)
    {
     $data =  $request->validate([
            'name' => ['required'] ,
            'bio' => ['required'] ,
            'gender' => ['required'] ,
            'image' => ['required', 'image']
           ]) ;

           $file = $request->file('image') ;

           $celebImagePath= FileUploader::uploadFile($file);

           $data['image'] = $celebImagePath ;


        try {

            Celebrity::create(
                $data
            ) ; 

            return redirect()->route('all-celebrity')->with('success', 'Model Created');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors("Some error occured ");
        }
    }


    public function updateView( Celebrity $id)
    {
        $celebrity = $id ;

        return view('admin.celebrity.update-celebrity',compact('celebrity')) ;

    }

    public function update(Request $request , Celebrity $id)
    {

        $updatedData =   $request->validate([
            'name' => ['required'] ,
            'bio' => ['required'] ,
            'gender' => ['required'] ,
           ]) ; ;

        try {
            
            $file = $request->file('image') ;

            if ($file) {

                $celebImagePath= FileUploader::uploadFile($file);

                $updatedData['image'] = $celebImagePath;
            }
        
            $id->update($updatedData);

            return redirect()->route('all-celebrity')->with('success', 'Model Updated');

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors("Some error occured ");

        }
    }
  
    public function delete( Celebrity $id )
    {
        $id->delete() ;

        return redirect()->route('all-celebrity')->with('success', 'Model Deleted');

    }

    public function allCelebrity()
    {
        $celebrities = Celebrity::all() ;

        return view('admin.celebrity.all-celebrity',compact('celebrities')) ;
    }


}

