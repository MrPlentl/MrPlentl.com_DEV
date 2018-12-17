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

@section('page-title')Brandon Plentl
@endsection

@section('main-content')
        <header class="page-header resume-header">
            <div class="background-image-holder parallax-background">
                <img class="background-image" alt="Background Image" src="img/header-image-brandon-plentl.jpg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-white space-bottom-medium">Brandon Plentl</h1>
                        <span>Full-Stack Web Developer / Solutionist</span>
                        <ul class="social-icons">
                            <li>
                                <a href="https://twitter.com/mrplentl" target="_blank">
                                    <i class="icon social_twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/MrPlentl" target="_blank">
                                    <i class="icon social_facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/mrplentl/" target="_blank">
                                    <i class="icon social_instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/c/thabamboozler" target="_blank">
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
                        <h1>Career Objective</h1>
                        <p class="lead">
                            I know it seems crazy, but I'm on the lookout for a team of Developers that share the same passion for creating great applications using the latest code technologies in a project based environment.
                        </p>
                    </div>
                </div><!--end of row-->
            </div>

        </section>

		<section class="skill-bars">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                        <h1>Skills &amp; Expertise</h1>
                        <p class="lead">
                            Even though my love for programming came from building Windows applications in Visual Basic, I found that my true passion was actually found in data manipulation and delivery. I do enjoy UX design, but application building and problem solving is where I really shine.
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
                                    <span>HTML 5</span>
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
                                    <span>JavaScript / jQuery</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-8"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Apache Web Server</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-7"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>MySQL</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-9"></div>
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
                                        <div class="skill-capacity col-xs-10"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Bootstrap / Responsive Web Design</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-8"></div>
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
                                        <div class="skill-capacity col-xs-9"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Photoshop</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-5"></div>
                                    </div>
                                </li>
                                <li>
                                    <span>Lightsaber Skills</span>
                                    <div class="skill-bar-holder">
                                        <div class="skill-capacity col-xs-9"></div>
                                    </div>
                                </li>
                            </ul>
                        </div><!--end of skills-->
                    </div>

                </div><!--end of row-->
            </div><!--end of container-->
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
                                    <i class="icon icon-ribbon" style="padding-bottom: 20px;margin-right: 0;"></i><br>
                                    <span><strong>Graduated from ITT Tech - Richardson</strong><br>Software Applications and Programming<br><strong style="font-size: 20px;">2007</strong></span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        The now defunct private college that brought hope for the hopeless, actually at one time had a pretty decent education program. Despite having the trendy Java shoved down my throat, ITT pushed and strengthened my ability to learn new concepts quickly. When I first started attending, I intended to get a degree in Electronic Engineering, but after taking one programming class, I fell in love with writing code. After learning the fun, yet now useless, Visual Basic, the heavy weight Java, and the power house C++, I left ITT Tech confident and ambitious about my future career as a programmer. 
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="title">
                                    <i class="icon icon-briefcase" style="padding-bottom: 20px;margin-right: 0;"></i><br>
                                    <span><strong>Development / Technical Support / Project Manager</strong><br>dataVoice International<br><strong style="font-size: 20px;">2006-2010</strong></span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        While attending school, it would've been very typical to go back to Chili's and play an obsessive amount of Halo 2 online, but instead I was extremely fortunate to find work in my same field of study. At dataVoice, I not only had a great job supporting the software, I also had access to several Senior level developers that helped train and mentor me through and past my years at school. It was here that I began to forge the foundation of my programming background, and even here now 10 years later, I still use some of those very same paradigms I was taught back then. 
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="title">
                                    <i class="icon icon-briefcase" style="padding-bottom: 20px;margin-right: 0;"></i><br>
                                    <span><strong>Webmaster / Developer</strong><br>Daystar Television Network<br><strong style="font-size: 20px;">2011-2018</strong></span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        From front-end WordPress design to the development and deployment of our custom giving platform, there are no limits to what I am responsible for. If it goes out on the internet, it's under my umbrella. Originally contracted to handle a couple 3rd party integrations, since then, I've gone on to build and manage over 15 websites and build countless integrations.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="title">
                                    <i class="icon icon-briefcase" style="padding-bottom: 20px;margin-right: 0;"></i><br>
                                    <span><strong>Software Developer</strong><br>IBM Hybrid Cloud<br><strong style="font-size: 20px;">2018-current</strong></span>
                                </div>

                                <div class="text-content">
                                    <p>
                                        At IBM, I use design documentation, such as Functional Programming Specifications and high level design documents to implement the identified components. I also ensure that the implemented components are unit tested and ready to be integrated into the product. I also provide fixes to defects identified by the verification team during the software development life cycle.
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
                                <span>25+</span>
                            </div>
                            <h3>Completed Websites</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="stat feature">
                            <div class="stat-bubble">
                                <span>100k+</span>
                            </div>
                            <h3>Completed Transactions</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="stat feature">
                            <div class="stat-bubble">
                                <span>12</span>
                            </div>
                            <h3>3rd Party API Integrations</h3>
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

        <section class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p class="lead">Whenever possible, I Always Love to Use the Best, Latest and Greatest Technologies Available When Building My Projects</p>
                    </div>
                </div><!--end of row-->

                <div class="row client-row">
                    <div class="row-wrapper">
                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/logo-dark.png">
                        </div>

                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/html5-css3-logo.png">
                        </div>

                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/WordPress-logo-black.png">
                        </div>

                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/laravel-logo.png">
                        </div>
                    </div>
                </div><!--end of row-->

                <div class="row client-row">
                    <div class="row-wrapper">

                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/bootstrap-logo.png">
                        </div>

                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/jQuery-logo.png">
                        </div>

                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/apache-logo-2.png">
                        </div>

                        <div class="col-sm-3 text-center">
                            <img alt="client" src="img/sass-logo.png">
                        </div>
                    </div>
                </div><!--end of row-->
            </div><!--end of container-->
        </section>
@endsection
