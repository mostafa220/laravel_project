<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SoftDeleteController extends Controller
{
    public function showDeleted(){
        $posts = Post::onlyTrashed()->get();
        return view('posts.showDeletedPosts',compact('posts'));

    }

    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
        // return view('posts.showDeletedPosts',compact('posts'));

    }

    public function forceDelete($id){
        $post = Post::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
        // return view('posts.showDeletedPosts',compact('posts'));

    }
}
