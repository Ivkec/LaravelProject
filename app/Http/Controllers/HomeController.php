<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Post;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }

    public function index()
    {
        $userPost = Post::orderBy('id','desc')->paginate(5); 
        return view('pages.home')->with('userPost', $userPost);
    }

    public function show($id)
    {
        $onePost = Post::findOrFail($id);
        return view('pages.showPost')->with('onePost', $onePost); 
    }
}

