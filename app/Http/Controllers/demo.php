<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class demo extends Controller
{
    //

    public function test123(){
        $name = "Brandon Plentl";
        $age="32";

        $tasks = DB::table('tasks')->get();

        return view('trainer', compact('name','age','tasks'));
    }

    public function task($id){

        $tasks = DB::table('tasks')->find($id);

        return view('Tasks.show', compact('tasks'));
    }
}