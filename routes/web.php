<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


###############################################
##########  Laracasts Tutorial  ###############
###############################################
use App\LcTask;

# 2) Basic Routing
//Route::get('/', function () { return view('laracasts.default'); });
Route::get('/', function () {

    if(env('APP_DEV_MODE')){
        return view('laracasts.default');
    } else {
        return view('/resume-active');
    }
})->name('index');

Route::get('/LC/about', function () { return view('laracasts.about'); });
Route::get('/LC/trainer', 'DemoController@test123');

// Redirect to a named Route
Route::get('/LC/redirect', function(){ return redirect()->route('index');});

//////////////


# 5) Pass Data to Your Views
Route::get('/LC', function () {
    //return view('laracasts.welcome', ['name' => 'Brandon']);

    ### Alternate Ways ###
    //return view ('laracasts.welcome')->with('name','Brandon');

    //$name = 'Brandon';
    //return view ('laracasts.welcome', compact('name'));

    $tasks = ['Go to the Store', 'Finish the Tutorials' , 'Clean the House', 'Keep Learning'];
    return view ('laracasts.welcome', compact('tasks'));

});
//////////////

# 06) Working With the Query Builder
//Route::get('/LC/tasks', function () {
//
//    $tasks = DB::table('lc_tasks')->get();  // Using Laravel's Query Builder
//
//    // Laravel takes the data and returns it as JSON
//    //return $tasks;
//
//    return view('laracasts.Tasks.index', compact('tasks'));
//});

//Route::get('/LC/tasks/{task}', function ($id) {
//
//    //dd($id);   // Die and Dump - This is simply echoing out the number given in the URI in the {task} slot... just passing the variable
//    $task = DB::table('lc_tasks')->find($id);  // Using Laravel's Query Builder
//    //dd($task);
//    //$task = LcTask::find($id);              // Using Eloquent with Task model
//    // dd($task);   // Die and Dump
//    return view('laracasts.Tasks.show', compact('task'));
//});
//////////////


# 07) Eloquent 101
//Route::get('/LC/tasks', function () {
//    //$tasks = DB::table('tasks')->get();  // Using Laravel's Query Builder
//    //$tasks = App\LcTask::all();                  // Using Eloquent with Task model
//    //$tasks = LcTask::all();                  // Using Eloquent with Task model with Namespace reference at the top
//
//    //$tasks = LcTask::incomplete()->get(); //
//    return view('laracasts.Tasks.index', compact('tasks'));
//});

//Route::get('/LC/tasks/{task}', function ($id) {
//
//    //dd($id);   // Die and Dump - This is simply echoing out the number given in the URI in the {task} slot... just passing the variable
//    //$task = DB::table('lc_tasks')->find($id);  // Using Laravel's Query Builder
//    //dd($task);
//    $task = LcTask::find($id);              // Using Eloquent with Task model
//    // dd($task);   // Die and Dump
//    return view('laracasts.Tasks.show', compact('task'));
//});

//////////////


# 08) Controllers
Route::get('/LC/tasks', 'LcTasksController@index');   // Using the TasksController

Route::get('/LC/tasks/{task}','LcTasksController@show');   // Using the TasksController
//////////////

# 10) Layouts and Structure
//Route::get('/LC/posts', 'LcPostsController@index');
//Route::get('/LC/posts/{post}', 'LcPostsController@show');

# 11) Form Request Data and CSRF

//Route::get('/LC/blog', 'LcPostsController@index');

Route::get('/LC/posts', 'LcPostsController@index');
Route::get('/LC/posts/create', 'LcPostsController@create')->middleware('auth');

Route::post('/LC/posts','LcPostsController@store');

Route::get('/LC/posts/{post}', 'LcPostsController@show');

# 99) Mailables

Route::get('/demo_email', 'DemoController@sendDemoEmail');

###############################################
########  END Laracasts Tutorial  #############
###############################################

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth', function(){ return view('auth-home'); });

Route::get('/sandbox', function (){ return view('sandbox'); });

//Route::get('/', 'DemoController@test123');
//Route::get('/tasks/{id}', 'DemoController@task');
//Route::get('/', function () { return view('home'); });
//Route::get('/about', function () { return view('about'); });

Route::get('/about-brandon-plentl', function () { return view('about'); });
Route::get('/about-ThaBamboozler', function () { return view('about-ThaBamboozler'); });
Route::get('/demo', function () { return view('demo'); });

Route::get('/blog', function(){ return view('blog'); });

####   POSTS   #####
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create')->middleware('auth');  // Must be above variable insertion
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts','PostsController@store');

### CONTACT ###
Route::get('/contact', function(){ return view('contact'); });

### Chrome Theme Page ###
Route::get('/chrome-theme/minimalist-dark', function(){ return view('chrome-themes'); });

#############################
#####  TEMPLATES  ###########
#############################
Route::get('/templates/index-old', function () { return view('templates.index-old'); });
Route::get('/templates', function () { return view('templates.index'); });
Route::get('/templates/404', function () { return view('templates.404'); });
Route::get('/templates/500', function () { return view('templates.500'); });
Route::get('/templates/about-2', function () { return view('templates.about-2'); });
Route::get('/templates/about', function () { return view('templates.about'); });
Route::get('/templates/blog-large-image', function () { return view('templates.blog-large-image'); });
Route::get('/templates/blog-masonry-sidebar', function () { return view('templates.blog-masonry-sidebar'); });
Route::get('/templates/blog-masonry', function () { return view('templates.blog-masonry'); });
Route::get('/templates/blog-single-2', function () { return view('templates.blog-single-2'); });
Route::get('/templates/blog-single-media', function () { return view('templates.blog-single-media'); });
Route::get('/templates/blog-single-sidebar', function () { return view('templates.blog-single-sidebar'); });
Route::get('/templates/blog-single', function () { return view('templates.blog-single'); });
Route::get('/templates/blog', function () { return view('templates.blog'); });
Route::get('/templates/bootstrap-elements', function () { return view('templates.bootstrap-elements'); });
Route::get('/templates/coming-soon', function () { return view('templates.coming-soon'); });
Route::get('/templates/contact-2', function () { return view('templates.contact-2'); });
Route::get('/templates/contact-3', function () { return view('templates.contact-3'); });
Route::get('/templates/contact-4', function () { return view('templates.contact-4'); });
Route::get('/templates/contact', function () { return view('templates.contact'); });
Route::get('/templates/home-2', function () { return view('templates.home-2'); });
Route::get('/templates/home-3', function () { return view('templates.home-3'); });
Route::get('/templates/home-4', function () { return view('templates.home-4'); });
Route::get('/templates/home-5', function () { return view('templates.home-5'); });
Route::get('/templates/index-bar-menu', function () { return view('templates.index-bar-menu'); });
Route::get('/templates/index-center-menu', function () { return view('templates.index-center-menu'); });
Route::get('/templates/index-contained-menu', function () { return view('templates.index-contained-menu'); });
Route::get('/templates/index-fullscreen-menu', function () { return view('templates.index-fullscreen-menu'); });
Route::get('/templates/launching-soon-2', function () { return view('templates.launching-soon-2'); });
Route::get('/templates/launching-soon-3', function () { return view('templates.launching-soon-3'); });
Route::get('/templates/launching-soon', function () { return view('templates.launching-soon'); });
Route::get('/templates/login', function () { return view('templates.login'); });
Route::get('/templates/one-page', function () { return view('templates.one-page'); });
Route::get('/templates/personal', function () { return view('templates.personal'); });
Route::get('/templates/project-single-2', function () { return view('templates.project-single-2'); });
Route::get('/templates/project-single', function () { return view('templates.project-single'); });
Route::get('/templates/projects-2', function () { return view('templates.projects-2'); });
Route::get('/templates/projects', function () { return view('templates.projects'); });
Route::get('/templates/services-2', function () { return view('templates.services-2'); });
Route::get('/templates/services', function () { return view('templates.services'); });