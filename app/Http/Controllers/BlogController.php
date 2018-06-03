<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    public function index(){
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        return view('blog.show', compact('post'));
    }

}
