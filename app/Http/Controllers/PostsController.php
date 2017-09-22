<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$posts = DB::table('posts')->get();  // Using Laravel's Query Builder
        $posts = Post::all();              // Using Eloquent with Task model

        return view('Posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create a new post using the request data
        //Save it to the Database
        // And then redirect

        //dd(request()->all());
        //dd(request('body'));
        //dd(request(['title','body']));

        //$post = new Post;

        # Option 1
//        $post->title = request('title');
//        $post->body = request('body');
//        $post->save();


        # Option 2 - This will generate a MassAssignmentException
        # It will require this declaration in Post.php || protected $fillable = ['post_title','post_content']; or the inverse protected $guarded = ['csrf_field'];

        Post::create([
            'post_status'=> 1,
            'post_author'=> 1,
            'post_title'=>request('post_title'),
            'post_content'=>request('post_content')
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post){
        return view('Posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
