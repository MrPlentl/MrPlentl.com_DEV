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
        <header class="page-header resume-header">
            <div class="background-image-holder parallax-background">
                <img class="background-image" alt="Background Image" src="img/hero21.jpg">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-white space-bottom-medium">Brandon Plentl</h1>
                        <span>Web Developer / Solution Expert</span>
                        <ul class="social-icons">
                            <li>
                                <a href="https://twitter.com/mrplentl">
                                    <i class="icon social_twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/MrPlentl">
                                    <i class="icon social_facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/mrplentl/">
                                    <i class="icon social_instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/c/thabamboozler">
                                    <i class="icon social_youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--end of row-->
            </div><!--end of container-->
        </header>

        <section class="duplicatable-content milestones">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                        <h1>Career Highlights</h1>
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
                        </p>
                    </div>
                </div><!--end of row-->

                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="feature feature-icon-large">
                            <i class="icon icon-notebook"></i>
                            <div class="pin-body"></div>
                            <div class="pin-head"></div>
                            <h5>2007 - Graduated</h5>
                            <span>Bachelor of Design</span>
                            <span class="sub">ITT Tech - Richardson</span>
                        </div>
                    </div><!--end 3 col-->

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="feature feature-icon-large">
                            <i class="icon icon-briefcase"></i>
                            <div class="pin-body"></div>
                            <div class="pin-head"></div>
                            <h5>2009 - Joined GoCorp.</h5>
                            <span>Junior Developer</span>
                            <span class="sub">UI / UX Design</span>
                        </div>
                    </div><!--end 3 col-->

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="feature feature-icon-large">
                            <i class="icon icon-ribbon"></i>
                            <div class="pin-body"></div>
                            <div class="pin-head"></div>
                            <h5>2011 - Attained PhD.</h5>
                            <span>Emergent Web Design</span>
                            <span class="sub">University of Melbourne</span>
                        </div>
                    </div><!--end 3 col-->

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="feature feature-icon-large">
                            <i class="icon icon-mic"></i>
                            <div class="pin-body"></div>
                            <div class="pin-head"></div>
                            <h5>2013 - Spoke at Meetup</h5>
                            <span>Efficient JS Modelling</span>
                            <span class="sub">Meetup 2014 - Melbourne</span>
                        </div>
                    </div><!--end 3 col-->

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="feature feature-icon-large">
                            <i class="icon icon-mic"></i>
                            <div class="pin-body"></div>
                            <div class="pin-head"></div>
                            <h5>2013 - Spoke at Meetup</h5>
                            <span>Efficient JS Modelling</span>
                            <span class="sub">Meetup 2014 - Melbourne</span>
                        </div>
                    </div><!--end 3 col-->


                </div><!--end of row-->
            </div>

        </section>

        <section class="expanding-list">

            <div class="background-image-holder parallax-background">
                <img class="background-image" alt="Background Image" src="img/hero22.jpg">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>Education &amp; Employment</h1>
                    </div><!--end 4 col-->
                </div><!--end of row-->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <ul class="expanding-ul">
                            <li>
                                <div class="title">
                                    <i class="icon icon-pencil"></i>
                                    <span><strong>Bachelor of Design &amp; Communication</strong> RMIT University</span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="title">
                                    <i class="icon icon-briefcase"></i>
                                    <span><strong>Junior Interaction Designer</strong> Corp &amp; Co.</span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="title">
                                    <i class="icon icon-briefcase"></i>
                                    <span><strong>User Engagement Facilitator</strong> Leehan &amp; Tax</span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="title">
                                    <i class="icon icon-trophy"></i>
                                    <span><strong>PhD. Contemporary Media</strong> University of Melbourne</span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end of row-->
            </div>
        </section>

        <section class="stat-counters duplicatable-content">

            <div class="background-image-holder parallax-background">
                <img class="background-image" alt="Background Image" src="img/hero8.jpg">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                        <h1>More About Me</h1>
                    </div>
                </div><!--end of row-->

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="stat feature">
                            <div class="stat-bubble">
                                <span>25</span>
                            </div>
                            <h3>Completed Projects</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="stat feature">
                            <div class="stat-bubble">
                                <span>86</span>
                            </div>
                            <h3>Satisfied Clients</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="stat feature">
                            <div class="stat-bubble">
                                <span>15</span>
                            </div>
                            <h3>Job Offers</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="stat feature">
                            <div class="stat-bubble">
                                <span>0</span>
                            </div>
                            <h3>Missed Deadlines</h3>
                        </div>
                    </div>
                </div><!--end of row-->

            </div><!--end of container-->
        </section>

        <section class="skill-bars">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                        <h1>Skills &amp; Expertise</h1>
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
                        </p>
                    </div>
                </div><!--end of row-->

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="skills-left skills">
                            <h3>Developer</h3>
                            <ul class="skills-ul">
                                <li>
                                    <span>PHP</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-10"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>HTML</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-11"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>WordPress</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-11"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Javascript / Jquery</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-8"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Apache</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-9"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>SQL</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-7"></div>
                                    </div>
                                </li>
                            </ul>
                        </div><!--end of skills-->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="skills-right skills">
                            <h3>Designer</h3>
                            <ul class="skills-ul">
                                <li>
                                    <span>CSS3</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-6"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Responsive Web Design</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-9"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>UX Design</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-9"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Branding &amp; Identity</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-10"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Bo Staff Skills (it's been awhile)</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-7"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Photoshop</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-5"></div>
                                    </div>
                                </li>
                            </ul>
                        </div><!--end of skills-->
                    </div>

                </div><!--end of row-->
            </div><!--end of container-->
        </section>

        <section class="projects-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        <h1>Check out some of my latest work</h1>
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.
                        </p>
                    </div>
                </div><!--end of row-->

            </div><!--end of container-->

            <div class="projects-wrapper clearfix">
                <div class="container">
                    <div class="row">
                        <ul class="filters">
                            <li data-filter="*" class="active">All</li>
                            <li data-filter=".branding">Branding</li>
                            <li data-filter=".development">Development</li>
                            <li data-filter=".print">Print Design</li>
                        </ul>
                    </div><!--end of row-->
                </div><!--end of container-->

                <div class="container">
                    <div class="projects-container column-projects">

                        <div class="col-md-4 col-sm-6 project development image-holder">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="img/project1.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-white"><strong>MS10</strong> UX</h3>
                                    <a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
                                </div>
                            </div>
                        </div><!--end of individual project-->

                        <div class="col-md-4 col-sm-6 project branding image-holder">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="img/project2.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-white"><strong>Medium</strong> Blog Platform</h3>
                                    <a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
                                </div>
                            </div>
                        </div><!--end of individual project-->

                        <div class="col-md-4 col-sm-6 project print image-holder">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="img/project3.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-white"><strong>Identity</strong> Mockup</h3>
                                    <a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
                                </div>
                            </div>
                        </div><!--end of individual project-->

                        <div class="col-md-4 col-sm-6 project print image-holder">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="img/project4.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-white"><strong>Aurora</strong> App Icons</h3>
                                    <a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
                                </div>
                            </div>
                        </div><!--end of individual project-->

                        <div class="col-md-4 col-sm-6 project branding image-holder">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="img/project5.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-white"><strong>Sketchbook</strong> Logo Mockup</h3>
                                    <a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
                                </div>
                            </div>
                        </div><!--end of individual project-->

                        <div class="col-md-4 col-sm-6 project development image-holder">
                            <div class="background-image-holder">
                                <img class="background-image" alt="Background Image" src="img/project6.jpg">
                            </div>
                            <div class="hover-state">
                                <div class="align-vertical">
                                    <h3 class="text-white"><strong>Muzik</strong> Home Screen</h3>
                                    <a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
                                </div>
                            </div>
                        </div><!--end of individual project-->
                    </div><!--end of projects-container-->
                </div><!--end of container-->
            </div><!--end of projects wrapper-->
        </section>
    </div>
@stop