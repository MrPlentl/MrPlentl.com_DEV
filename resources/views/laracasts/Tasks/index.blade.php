@extends('laracasts.layout')

@section('title')MrPlentl | Laracasts Training - Task List
@endsection

@section('sub-title')Tasks
@endsection

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

<a href="/LC">
    <button type="button" class="btn btn-secondary">BACK</button>
</a>

@endsection