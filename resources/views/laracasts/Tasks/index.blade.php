@extends('laracasts.layout')

@section('title')MrPlentl | Laracasts Training - Task List
@stop

@section('sub-title')Tasks
@stop

@section('main-content')


<ul class="list-group">
    @foreach( $tasks as $task )
        <li class="list-group-item">
            <a href="/LC/tasks/{{ $task->id }}">
                {{ $task->body }}
            </a>
        </li>
    @endforeach
</ul>

@stop