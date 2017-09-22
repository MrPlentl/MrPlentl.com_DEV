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
    @include('layouts.navigation')
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
