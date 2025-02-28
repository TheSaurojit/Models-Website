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
            'instagram' => ['string'] ,
            'image-1' => ['image','required'] ,
            'image-2' => ['image'] ,
            'image-3' => ['image'] ,
            'image-4' => ['image'] ,
           ]) ;

           $data['trending'] = $request['trending'] == "Yes" ? true : false ;

           $data['image-1'] = FileUploader::uploadFile( $request->file('image-1') );

           $data['image-2'] = $request->file('image-2') ?  FileUploader::uploadFile( $request->file('image-2') ) : "" ;
           $data['image-3'] = $request->file('image-3') ?  FileUploader::uploadFile( $request->file('image-3') ) : "" ;
           $data['image-4'] = $request->file('image-4') ?  FileUploader::uploadFile( $request->file('image-4') ) : "" ;

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
           ]) ; 

        try {
            
            $updatedData['trending'] = $request['trending'] == "Yes" ? true : false ;
            
            $updatedData['image-1'] = $request->file('image-1') ?  FileUploader::uploadFile( $request->file('image-1') ) : $id['image-1'] ;
            $updatedData['image-2'] = $request->file('image-2') ?  FileUploader::uploadFile( $request->file('image-2') ) : $id['image-2'] ;
            $updatedData['image-3'] = $request->file('image-3') ?  FileUploader::uploadFile( $request->file('image-3') ) : $id['image-3'] ;
            $updatedData['image-4'] = $request->file('image-4') ?  FileUploader::uploadFile( $request->file('image-4') ) : $id['image-4'] ;
        
            
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

