@extends('laracasts.layout')

@section('title')
    The Task
@endsection

@section('sub-title')
    The Task
@endsection

@section('main-content')
    <h1>{{ $task->body }}</h1>

    <a href="/LC/tasks">
    <button type="button" class="btn btn-secondary">BACK</button>
    </a>
@endsection