<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $posts = Post::all();
        return view('posts.show',compact('posts'));
        // return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.index') ;
        // return response()->json($post);
        // return "fol alik";

        //another way to make post
        // Post::create([
        //     'title'=>$request->title,
        //     'body'=>$request->body
        // ]);
        // return "fol alik";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findorfail($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //الطريقة الاولى
        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.index');

         //الطريقة الثانية
        //  $post =Post::findorfail($id);
        //  $post->update([
        //     'title'=>$request->title,
        //     'body'=>$request->body

        //  ]);
        // return redirect()->route('posts.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   //delete only one id
        $post = Post::findorfail($id);
        $post->delete();
        return redirect()->route('posts.index');

        //can delete on or mor id's post::destroy($id1,$id2)
        // if destroy vave more than one id or it could by static post::destroy($id1,5)
        // post::destroy($id);
        // return redirect()->route('posts.index');

    }

    
}
