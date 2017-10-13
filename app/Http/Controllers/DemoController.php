<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mail\LcDemoEmail;

class DemoController extends Controller
{
    //

    public function test123(){
        $name = "Brandon Plentl";
        $age="32";

        $tasks = DB::table('tasks')->get();

        return view('laracasts.trainer', compact('name','age','tasks'));
    }
	
	public function test1(){
        $name = "Brandon Plentl";
        $age="32";

        $tasks = DB::table('tasks')->get();

        return $age;
    }

    public function task($id){

        $tasks = DB::table('tasks')->find($id);

        return view('Tasks.show', compact('tasks'));
    }

    public function sendDemoEmail(){
        \Mail::to('bplentl@gmail.com')->send(new LcDemoEmail('This is another Demo Test Email'));
    }
}