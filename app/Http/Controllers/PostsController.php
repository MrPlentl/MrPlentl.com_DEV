<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('laracasts.Posts.index');
    }

    public function show(){
        return view('laracasts.Posts.show');
    }
}
