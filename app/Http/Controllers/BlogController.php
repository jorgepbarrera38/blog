<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    public function index(){
        $outstanding = Post::where('outstanding', true)->first();
        $posts = Post::where('published', true)->latest()->paginate(10);
        return view('blog.index', compact('posts', 'outstanding'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->where('published', true)->first();
        if ($post){
            return view('blog.show', compact('post'));
        }
        return abort(404);
    }

    public function contact(){
        return view('blog.contact');
    }

    public function contactstore(Request $request){
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'body' => 'required|string|max:200',
        ]);
    }

}
