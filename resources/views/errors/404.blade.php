@extends('layouts.master')

@section('page-title')About Brandon Plentl
@endsection

@section('main-content')
			<section class="no-pad error-page bg-primary fullscreen-element" style="background: url('/img/404-last-of-us.jpg');background-size: cover;">
				<div class="container align-vertical">
					<div class="row">
						<div class="col-sm-12 text-center">
							<i class="icon icon-compass"></i>
							<h1 class="jumbo" style="text-shadow: 5px 3px 25px #000000;">404</h1>
							<h1 style="text-shadow: 5px 3px 25px #000000;"><strong>Oh dear, we seem to have led you astray!</strong><br>Let's get back on track...</h1>
							<a href="chooser.html" class="btn btn-primary btn-white" target="default">Take Me Home</a>
							<a href="#" class="btn btn-primary btn-white btn-text-only">Report This</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
@endsection
				