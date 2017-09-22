@extends('layouts.blog-layout')

@section('page-title')
    Blog
@endsection

@section('main-content')
    <header class="title">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="/img/hero10.jpg">
        </div>

        <div class="container align-bottom">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-white">{{ $post->post_title }}</h1>
                    <span class="sub alt-font text-white">{{ $post->created_at }} - 3 Minute Read</span>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </header>

    <section class="article-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="article-body">
                        {{ $post->post_content }}
                    </div><!--end of article body-->
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
@endsection