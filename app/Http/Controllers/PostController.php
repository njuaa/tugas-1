<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct ()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts= Post::all();
        return view ('home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createstts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'gambar_post'=>'mines:png,jpg,jpeg,gif,|image|max:5048',
            'penulis_post'=>'required',
            'judul_post'=>'required',
            'isi_post'=>'required',
        ]
    );

    $file =$request->file('gambar_post');
    $path =$file->storeAs('uploads',time(). '-' .$request->file('gambar_post'->extension()));

    $post = new Post;
    $post->user_id = $request['penulis_post'];
    $post->judul_post = $request['judul_post'];
    $post->isi_post = $request['isi_post'];
    $post->gambar_post = $path;
    $post->save();

    return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts=Post::find($id);
        return view("editstts");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}