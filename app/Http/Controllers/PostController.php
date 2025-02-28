<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;
use App\Models\FirstPost;
use App\Models\Posts;
use Carbon\Carbon;
use DOMDocument;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



class PostController extends Controller
{

    public function allPosts()
    {
        $posts = Posts::with('celebrity')->latest()->get();
        
        return view('admin.post.all-post', compact('posts'));
    }


    public function createView()
    {

        return view('admin.post.create-post');
    }

    public function create(Request $request)
    {
  
        $data = $request->validate([
            'title' => ['required', 'unique:posts,title'],
            'keywords' => ['nullable'],
            'description' => ['nullable'],
            'image_caption' => ['nullable'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'blog' => ['required'],
            'model' => ['required'] ,
            'created_at' => ['required'] ,
        ]);

        try {

            $data['thumbnail'] = FileUploader::uploadFile( $request->file('thumbnail') );

            $data['slug'] = $this->slug($request['title']);

            $data['celebrity_id'] = $request['model'] ;

            Posts::create(
                $data
            ) ;

            $this->sitemap($data['slug']);

            return redirect()->route('all-posts')->with('success', 'Post Created');

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors("Some error occured ");
        }
    }


    public function updateView(Posts $id)
    {
        $post = $id;

        return view('admin.post.update-post', compact('post'));
    }


    public function update(Request $request, Posts $id)
    {

            $data = $request->validate([
                'title' => ['required'],
                'keywords' => ['nullable'],
                'description' => ['nullable'],
                'image_caption' => ['nullable'],
                'thumbnail' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
                'blog' => ['required'],
                'model' => ['required'] ,
                'created_at' => ['required'] ,

            ]);

        try {

            $data['thumbnail'] = $request->file('thumbnail') ?  FileUploader::uploadFile( $request->file('thumbnail') ) : $id['thumbnail'] ;

            $data['slug'] = $this->slug($request['title']);

            $data['celebrity_id'] = $request['model'] ;


            $id->update(
                $data
            );
    
                return redirect()->route('all-posts')->with('success', 'Post Updated');

            } catch (\Throwable $th) {

                return redirect()->back()->withErrors("Some error occured ");

            }

    }


    public function deletePost(Posts $id)
    {
        $id->delete();

        return redirect()->route('all-posts')->with('success', 'Post Moved to Trash');
    }

    public function trashPosts()
    {  
        
        $posts =  Posts::onlyTrashed()->get() ;

        return  view('admin.post.all-trash-post',compact('posts')) ;
    }

    public function deleteTrashPosts( $id)
    {  
      $post = Posts::withTrashed()->findOrFail($id);

        $post->forceDelete(); // Delete the post

        return redirect()->route('trash-posts')->with('success', 'Post Deleted ');
    
    
    }

    public function restoreTrashPosts( $id)
    {  
      $post = Posts::withTrashed()->findOrFail($id);

      $post->restore(); // Restore the post

      return redirect()->route('trash-posts')->with('success', 'Post Restored ');

    }


    public function allDeleteTrashPosts()
    {  
        Posts::onlyTrashed()->forceDelete();

        return redirect()->route('all-posts')->with('success', 'Posts Deleted from Trash');
    }

    public function allDeletePosts()
    {  
        Posts::query()->delete();

        return redirect()->route('all-posts')->with('success', 'Posts Deleted');
    }



    public function makeFirstPost(Posts $id)
    {
        FirstPost::updateOrCreate(
            ['id' => 1], // Match based on id
            ['post_id' => $id->id] // Update post_id if record exists or create a new one
        );
        
        return redirect()->route('all-posts')->with('success', 'Made it  first post');

    }


    public function imageUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            try {
                $file = $request->file('upload');

                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)
                    . '_' . time() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('images/posts'), $fileName);

                $url = "/images/posts/" . $fileName;

                return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
            } catch (\Throwable $th) {

                return response()->json(['success' => false, 'message' => 'Image uploading error.'], 500);
            }
        }
    }


    public function imageRemove(Request $request)
    {
        $imageUrl = $request->input('url');

        if (!$imageUrl) return;

        $imagePath = parse_url($imageUrl, PHP_URL_PATH);
        $filePath = public_path('') . $imagePath;

        if (file_exists($filePath) && unlink($filePath)) {
            return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Image deletion failed.']);
        }
    }


    public function sitemap($slug)
    {

        $url = route('blog' , ['slug'=>$slug])  ;
        
            $xmlFile = public_path('sitemap.xml');


            $dom = new DOMDocument();
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true; 


            if ($dom->load($xmlFile)) {
                
                $urlset = $dom->documentElement;

                $newUrl = $dom->createElement('url');

                $loc = $dom->createElement('loc', $url);
                $newUrl->appendChild($loc);

                $lastmod = $dom->createElement('lastmod', Carbon::now('Asia/Kolkata')->toDateString());
                $newUrl->appendChild($lastmod);

                $urlset->appendChild($newUrl);

                $dom->save($xmlFile);

            } 
            else
            {
                throw new Error("Unable to load sitemap");
            }

    }

    public function slug(string $value)
    {
        return Str::slug(strtolower($value));
    }


}
