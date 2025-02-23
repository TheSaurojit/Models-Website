<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function createView()
    {  
        return view('pages.contact');
    }

    public function create(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
    
            Contact::create($data);
    
            return response()->json(['status' => 'success'], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['status' => 'error', 'message' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!'], 500);
        }
    }
        
    
    public function allAdminView()
    {  
        $data = Contact::all() ;

        return view('admin.contact.all-contact',compact('data')) ;

    }

    public function adminView(Contact $id)
    {  
        $data = $id ;
        return view('admin.contact.view-contact',compact('data')) ;
    }

    public function delete(Contact $id)
    {  
        $id->delete() ;
        return redirect()->route('all-contact')->with('success', 'Contact Deleted');

    }
}
