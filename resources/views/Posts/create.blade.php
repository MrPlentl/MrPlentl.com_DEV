
@extends('layouts.master')

@section('title')
    Create a Post
@endsection

@section('sub-title')
    Create a New Post
@endsection

@section('main-content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                    <h1>@yield('sub-title')</h1>
                    <form method="POST" action="/posts">
                        <p class="lead">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="post_title">Title</label>
                            <input type="text" class="form-control" id="post_title" name="post_title">
                        </div>
                        <div class="form-group">
                            <label for="post_content">Body</label>
                            <textarea class="form-control" id="post_content" name="post_content"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Publish</button>
                    </p>
                    </form>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
@endsection
