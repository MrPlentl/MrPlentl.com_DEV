<?php
# File:            home.blade.php
# Current Ver:
# Function:
# Author:          Brandon Plentl (bp)
# Environment:     PhpStorm - Windows 10
# Code Cleaned:
# Code Validated:
# Notes:
# Fixes Needed:
# Revisions: \\

?>
@extends('layouts.master')

@section('title')Laravel Trainer | Home
@endsection

@section('main-content')
<div class="main-container">
    <section class="no-pad error-page bg-primary fullscreen-element">
        <div class="container align-vertical">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>{{ $name }} - {{ $age }}</h1>
                    <ul>
                        @foreach ($tasks as $task)
                            <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
</div>
@endsection
				