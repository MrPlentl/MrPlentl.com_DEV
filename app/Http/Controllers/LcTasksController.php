<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LcTask;

class LcTasksController extends Controller
{
    //

    public function index()
    {
        //$tasks = DB::table('tasks')->get();  // Using Laravel's Query Builder
        $tasks = LcTask::all();              // Using Eloquent with Task model

        return view('LC_tasks.index', compact('tasks'));
    }

    public function show(LcTask $task)
    {
        // dd($id);   // Die and Dump
        //$task = DB::table('tasks')->find($id);  // Using Laravel's Query Builder
        //$task = Task::find($id);              // Using Eloquent with Task model

        // dd($task);   // Die and Dump
        return view('LC_tasks.show', compact('task'));
    }
}
