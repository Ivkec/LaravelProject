<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Post; 

class AdminPostsController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5); 
         return view('admin.post')->with('posts', $posts); 
    }

    public function create()
    {
        return view('admin.createPost'); 
    }

    public function store(Request $request)
    {
        $this->validate($request,[ 
            'postTitle' => 'required|min:3|max:255', 
            'body' => 'required|min:3',
            ]);  
            
            $post = new Post; 
            $post->title = $request->input('postTitle'); 
            $post->body = $request->input('body');
            $post->post_creator = $request->input('post_creator');  
            $post->save(); 
            return redirect('/posts')->with('success', 'Post je uspešno kreiran!'); 
    }

    public function show($id)
    {
        $onePost = Post::findOrFail($id);
        return view('admin.showPost')->with('onePost', $onePost); 
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post-edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->update();

        return redirect('/posts')->with('success', 'Podaci su uspešno ažurirani!');
    
    }

    public function destroy($id)
    {
          $post = Post::findOrFail($id); 
          $post->delete(); 
          return redirect('/posts')->with('success', 'Post je uspešno obrisan!'); 
    }

    public function postDestroyConfirm(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post-destroy')->with('post', $post);
    }

    //CKEditor upload
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
      
            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
 
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore); 
            $msg = 'Image successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
    }

}
