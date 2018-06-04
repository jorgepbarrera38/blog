<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Message;

class BlogController extends Controller
{

    public function index(){
        $outstanding = Post::where('outstanding', true)->where('published', true)->first();
        $posts_sidebar = Post::where('published', true)->inRandomOrder()->take(3)->get();
        $posts = Post::where('published', true)->latest()->paginate(10);
        return view('blog.index', compact('posts', 'outstanding', 'posts_sidebar'));
    }

    public function show($slug){
        $posts_sidebar = Post::where('published', true)->inRandomOrder()->take(3)->get();
        $post = Post::where('slug', $slug)->where('published', true)->first();
        if ($post){
            return view('blog.show', compact('post', 'posts_sidebar'));
        }
        return abort(404);
    }

    public function contact(){
        $posts_sidebar = Post::where('published', true)->inRandomOrder()->take(3)->get();
        return view('blog.contact', compact('posts_sidebar'));
    }

    public function contactstore(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'body' => 'required|string|max:250',
        ], [
            'name.required' => 'Debes escribir tu nombres completos',
            'email.required' => 'Debes escribir tu correo electrónico',
            'body.required' => 'Debes escribir un mensaje',
        ], [
            'name' => 'Nombres completos',
            'email' => 'Correo electrónico',
            'body' => 'Mensaje'
        ]);

        Message::create($data);

        return redirect()->back()->with('info', 'Tu mensaje se envió correctamente, gracias por escribirnos, pronto te responderemos');

    }

    public function aboutus(){
        $posts_sidebar = Post::where('published', true)->inRandomOrder()->take(3)->get();
        return view('blog.aboutus', compact('posts_sidebar'));
    }

}
