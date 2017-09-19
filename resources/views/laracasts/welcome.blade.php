@extends('laracasts.layout')

@section('title')
Static Tasks
@endsection

@section('sub-title')
Static Tasks
@endsection

@section('main-content')
<div style="padding-top: 25px;">
    @foreach ($tasks as $task)
    <ul>
        <li>{{ $task }}</li>
    </ul>
    @endforeach
</div>

<div style="margin: auto; width: 50%;text-align: center">
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <a href="/LC/tasks"><button type="button" class="btn btn-secondary">View DB Tasks</button></a>
</div>
@endsection
