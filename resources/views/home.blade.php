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
@extends('layout-base')

@section('title')MrPlentl | Home
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
							<h1>From concept to conclusion</h1>
							<p class="lead">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
							</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
			
			<section class="duplicatable-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="feature">
								<h5>Problem</h5>
								<p>
									Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus
								</p>
							</div>
						</div><!--end 4 col-->
					
						<div class="col-sm-4">
							<div class="feature">
								<h5>Solution</h5>
								<p>
									Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus
								</p>
							</div>
						</div><!--end 4 col-->
					
						<div class="col-sm-4">
							<div class="feature">
								<h5>Result</h5>
								<p>
									Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus
								</p>
							</div>
						</div><!--end 4 col-->
					</div><!--end of row-->
				</div>
			</section>
			
			<section class="strip bg-secondary-1">
				<div class="container">
					<div class="row clearfix">
						<div class="col-sm-6 col-xs-12 pull-left">
							<h3 class="text-white"><strong>Start a project.</strong>&nbsp;Get in touch</h3>
						</div>
						
						<div class="col-sm-4 col-xs-12 pull-right text-right">
							<a href="#" class="btn btn-primary btn-white">contact us</a>
						</div>
					</div>
				</div>
			</section>
			
			<section class="no-pad-bottom no-pad-top projects-gallery">
				
				<div class="projects-wrapper clearfix">
					
					<div class="projects-container">
						
						<div class="col-md-4 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="/img/project1.jpg">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h3 class="text-white"><strong>Identity</strong> Mockup</h3>
									<p class="text-white">
										Showcase your new identity with<br>this sleek mockup.
									</p>
									<a href="/templates/project-single" class="btn btn-primary btn-white">See Project</a>
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-4 col-sm-6 no-pad project branding image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="/img/project4.jpg">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h3 class="text-white"><strong>Aurora</strong> Icon Kit</h3>
									<p class="text-white">
										A fresh and circular take on Apple's<br>iconic home screen.
									</p>
									<a href="/templates/project-single" class="btn btn-primary btn-white">See Project</a>
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-4 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="/img/project6.jpg">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h3 class="text-white"><strong>Sketchbook</strong> Logos</h3>
									<p class="text-white">
										Present your hand-drawn logos on this<br>realistic sketchbook mockup.
									</p>
									<a href="/templates/project-single" class="btn btn-primary btn-white">See Project</a>
								</div>
							</div>
						</div><!--end of individual project-->
					
					</div><!--end of projects-container-->
					
				</div><!--end of projects wrapper-->
				
			</section>
		</div>
@stop