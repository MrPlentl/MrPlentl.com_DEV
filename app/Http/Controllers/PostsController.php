<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index(){
        return view('laracasts.Posts.index');
    }

    public function show(){
        $posts = Post::all();
        return view('laracasts.Posts.show', compact('posts'));
    }
}