@extends('laracasts.layout')

@section('title')Laracasts Tutorial  | Home
@stop

@section('main-content')
    <div class="main-container">
        <section class="action-banner overlay">

            <div class="background-image-holder">
                <img class="background-image" alt="Background Image" src="/img/hero4.jpg">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                        <h1 class="text-white">Welcome to your Scratch Pad</h1>
                        <h2 class="text-white">Laravel Training</h2>
                        <a href="/LC" class="btn btn-primary btn-white">TASKS</a>
                        <a href="#" class="btn btn-primary btn-white btn-filled">start a project</a>
                    </div>
                </div><!--end of row-->
            </div><!--end of container-->

        </section>

        <section class="image-slider-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                        <h1>Laravel from Scratch</h1>
                        <ul>
                            @foreach( $tasks as $task )
                                <li>{{ $task->body }}</li>
                            @endforeach
                        </ul>
                        <div style="margin: auto; width: 50%;text-align: center">
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a href="/LC/tasks"><button type="button" class="btn btn-secondary">BACK</button></a>
                        </div>
                    </div>
                </div><!--end of row-->
            </div><!--end of container-->
        </section>
    </div>
@stop