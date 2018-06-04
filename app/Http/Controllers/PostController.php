<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:80|unique:posts,title',
            'excerpt' => 'required|string|max:151',
            'body' => 'required|string|max:5000',
            'imagesmall' => 'required|image|dimensions:width=416,height=256',
            'imagelarge' => 'required|image|dimensions:width=1280,height=416'
        ], [
            'imagesmall.dimensions' => 'La Imagen Pequeña debe tener las dimensiones 416x256',
            'imagelarge.dimensions' => 'La Imagen Grande debe tener las dimensiones 1280x416',
        ], [
            'title' => 'Título',
            'excerpt' => 'Extracto', 
            'body' => 'Contenido',
            'imagesmall' => 'Imagen pequeña',
            'imagelarge' => 'Imagen de portada'
        ]);
        
        $post_title = $request->input('title');

        $post = new Post;
        $post->title = $post_title;
        $post->slug = str_slug($post_title);
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        $post->imagesmall = Storage::disk('public')->put('images/posts', $request->file('imagesmall'));
        $post->imagelarge = Storage::disk('public')->put('images/posts', $request->file('imagelarge'));
        $post->user_id = \Auth::user()->id;
        $post->save();

        return redirect()->route('posts.index')->with('info', 'Post guardado correctamente');

    }

    public function changestate($slug){
        $post = Post::where('slug', $slug)->first();
        $post->published = !$post->published;
        $post->save();

        return redirect()->back()->with('info', 'Estado del post actualizado correctamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
