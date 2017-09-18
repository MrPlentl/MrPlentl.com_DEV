<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LcTask;   // Imported

class LcTasksController extends Controller
{
    //

    public function index()
    {
        //$tasks = DB::table('tasks')->get();  // Using Laravel's Query Builder
        $tasks = LcTask::all();              // Using Eloquent with Task model
        // $tasks = LcTask::incomplete()->get();
        return view('laracasts.Tasks.index', compact('tasks'));
    }

    /*
    public function show($id)
    {
        // dd($id);   // Die and Dump
        //$task = DB::table('tasks')->find($id);  // Using Laravel's Query Builder
        $task = LcTask::find($id);              // Using Eloquent with Task model
        // dd($task);   // Die and Dump

        //return $task;   //JSON Response

        return view('laracasts.Tasks.show', compact('task'));
    }
    */

    # 9) Route Model Binding
    public function show(LcTask $task) // The Wildcard from the route must match the variable name
    {
        return view('laracasts.Tasks.show', compact('task'));
    }
}
