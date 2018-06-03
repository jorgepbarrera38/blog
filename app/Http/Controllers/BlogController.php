<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    public function index(){
        $outstanding = Post::where('outstanding', true)->first();
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts', 'outstanding'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        return view('blog.show', compact('post'));
    }

}
