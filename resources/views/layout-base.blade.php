<?php
# File:            layout-base.blade.php   
# Current Ver:     
# Function:       
# Author:          Brandon Plentl (bp)
# Environment:     PhpStorm - Windows 10
# Code Cleaned:   
# Code Validated: 
# Notes:          
# Fixes Needed:	  
# Revisions:      
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <link rel="shortcut icon"  href="favicon.ico" />
    <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">

            <div class="row utility-menu">
                <div class="col-sm-12">
                    <div class="utility-inner clearfix">
                        <span class="alt-font"><i class="icon icon_pin"></i> Rooted in <a href="https://www.google.com/maps/place/Euless,+TX/data=!4m2!3m1!1s0x864e794bbb480dff:0xcf93da011b356265?sa=X&ved=0ahUKEwjooIS87LXPAhUDziYKHYXgDCwQ8gEIgAEwCw" style="text-decoration:none;color:#fff;" target="_blank">Euless</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="alt-font"><i class="icon icon_mail"></i> <a href="mailto:bplentl@gmail.com" style="text-decoration:none;color:#fff;" target="_blank">bplentl@gmail.com</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="alt-font"><i class="icon icon_phone"></i> <a href="tel:2145468271" style="text-decoration:none;color:#fff;" target="_blank">(682) 503-9073</a></span>
                    </div>
                </div>
            </div><!--end of row-->


            <div class="row nav-menu">
                <div class="col-sm-3 col-md-2 columns">
                    <a href="">
                        <img class="logo logo-light" alt="Logo" src="img/logo-light.png">
                        <img class="logo logo-dark" alt="Logo" src="img/logo-dark.png">
                    </a>
                </div>

                <div class="col-sm-9 col-md-10 columns">
                    <ul class="menu">
                        <li class="has-dropdown"><a href="/about-brandon-plentl">About</a>
                            <div class="subnav">
                                <ul>
                                    <li><a href="templates/index">Home Classic</a></li>
                                    <li><a href="templates/home-2">Home Education</a></li>
                                    <li><a href="templates/home-3">Home Business</a></li>
                                    <li><a href="templates/home-4">Home Agency</a></li>
                                    <li><a class="btn btn-primary" href="#">CONTACT</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-dropdown"><a href="#">Blog</a>
                            <ul class="subnav">
                                <li><a href="templates/about">About Us</a></li>
                                <li><a href="templates/about-2">About Us 2</a></li>
                                <li><a href="templates/services">Services</a></li>
                                <li><a href="templates/services-2">Services 2</a></li>
                                <li><a href="templates/login">Login</a></li>
                                <li><a href="templates/404">404 Error</a></li>
                                <li><a href="templates/500">500 Error</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">Favorites</a>
                            <div class="subnav subnav-halfwidth">
                                <div class="col-sm-6">
                                    <h6 class="alt-font">Article Lists</h6>
                                    <ul class="subnav">
                                        <li><a href="templates/blog-masonry">Masonry</a></li>
                                        <li><a href="templates/blog-masonry-sidebar">Masonry Sidebar</a></li>
                                        <li><a href="templates/blog">Blog Large List</a></li>
                                        <li><a href="templates/blog-large-image">Blog Image List</a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <h6 class="alt-font">Article Singles</h6>
                                    <ul class="subnav">
                                        <li><a href="templates/blog-single">Article Basic</a></li>
                                        <li><a href="templates/blog-single-2">Article Basic 2</a></li>
                                        <li><a href="templates/blog-single-sidebar">Article Sidebar</a></li>
                                        <li><a href="templates/blog-single-media">Article Media</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-dropdown"><a href="#">Projects</a>
                            <ul class="subnav">
                                <li><a href="templates/projects">Projects Fullwidth</a></li>
                                <li><a href="templates/projects-2">Projects Contained</a></li>
                                <li><a href="templates/project-single-2">Project Single</a></li>
                                <li><a href="templates/project-single">Project Single 2</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">Contact</a>
                            <ul class="subnav">
                                <li><a href="templates/contact-3">Large Map</a></li>
                                <li><a href="templates/contact-2">Map with form</a></li>
                                <li><a href="templates/contact">Header with form</a></li>
                                <li><a href="templates/contact-4">Fullscreen photo</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="social-icons text-right">
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
                            <a href="https://www.instagram.com/MrPlentl/" target="_blank">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end of row-->

            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>

        </div><!--end of container-->
    </nav>
</div>

@yield('main-content')

<div class="footer-container">
    <footer class="social bg-secondary-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="text-white">Give Me a Shout</h1>
                    <a href="mailto: bplentl@gmail.com" class="text-white"><strong>bplentl@gmail.com</strong></a><br>
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
                    <br />
                    <span class="sub" ><span style="display: inline-block; text-align: right; margin: 0;"></span> Copyleft 2016 <a href="/">MrPlentl.com</a> - Built on Laravel {{ App::VERSION() }}</span>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/scrollReveal.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/twitterFetcher_v10_min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
