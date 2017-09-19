
@extends('laracasts.layout')

@section('title')
    Create a Post
@endsection

@section('sub-title')
    Create a New Post
@endsection

@section('main-content')
    <form method="POST" action="/LC/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
@endsection
