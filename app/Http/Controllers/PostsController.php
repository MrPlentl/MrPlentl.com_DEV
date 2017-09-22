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
        //$tasks = DB::table('tasks')->get();  // Using Laravel's Query Builder
        $posts = Post::all();              // Using Eloquent with Task model
        // $tasks = LcTask::incomplete()->get();
        return view('laracasts.Posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('laracasts.Posts.create');
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
        # It will require this declaration in Post.php || protected $fillable = ['title','body']; or the inverse protected $guarded = ['csrf_field'];

        Post::create([
            'title'=>request('title'),
            'body'=>request('body')
        ]);

        return redirect('/LC/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post){
        return view('laracasts.Posts.show', compact('post'));
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