@extends('layouts.login-layout')

@section('contents')
        <section class="no-pad login-page fullscreen-element">

            <div class="background-image-holder">
                <img class="background-image" alt="Poster Image For Mobiles" src="/img/hero6.jpg">
            </div>

            <div class="container align-vertical">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                        <h1 class="text-white">Login to continue</h1>
                        <div class="photo-form-wrapper clearfix">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <div>
                                        <input id="email" type="email" class="form-email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                    <div>
                                        <input class="form-password" type="password" placeholder="Password" id="password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <input class="login-btn btn-filled" type="submit" value="Login">
                            </form>
                        </div><!--end of photo form wrapper-->
                        <a href="#" class="text-white">Create an account ➞</a><br>
                        <a href="{{ route('password.request') }}" class="text-white">I've forgotten my password</a>
                    </div>
                </div><!--end of row-->
            </div><!--end of container-->
        </section>
@endsection