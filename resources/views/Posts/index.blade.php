@extends('layouts.blog-layout')

@section('page-title')
    Blog
@endsection

@section('main-content')
    <header class="page-header">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="/img/hero6.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="text-white alt-font">Tutorial</span>
                    <h1 class="text-white">Laravel Blog Posts</h1>
                    <p class="text-white lead">Learn why Laravel is the best at what they do<br>and why they're regarded as one of the best<br> PHP Frameworks today.</p>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </header>

    <section class="blog-list-3 bg-white">

        @foreach($posts as $post)
            <div class="blog-snippet-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <h1><a href="/posts/{{ $post->id }}">{{ $post->post_title }}</a></h1>
                            <p class="lead">
                                {{ $post->post_content }}
                            </p>
                            <i class="icon icon_calendar"></i><span class="alt-font">Published {{ $post->post_date }}</span><br>
                            <i class="icon icon_clock_alt"></i><span class="alt-font">5 minute read</span>
                        </div>
                    </div><!--end of row-->
                </div><!--end of container-->
            </div><!--end of blog-snippet-3-->
        @endforeach

    </section>
@endsection