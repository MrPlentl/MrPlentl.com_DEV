<?php
# File:            show.blade.php   
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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Kyber | Blog Single</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="/css/ie9.css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
    @include('laracasts.navigation')
</div>
<div class="main-container">
    <header class="title">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="/img/hero10.jpg">
        </div>

        <div class="container align-bottom">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-white">{{ $post->title }}</h1>
                    <span class="sub alt-font text-white">{{ $post->created_at }} - 3 Minute Read</span>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </header>

    <section class="article-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="article-body">
                        {{ $post->body }}
                    </div><!--end of article body-->
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
</div>
<div class="footer-container">

    <footer class="bg-primary short-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="text-white">© 2014 Kyber Inc.</span>
                    <span class="text-white"><a href="#">luke.skywalker@starwars.com</a></span>
                    <span class="text-white">+614 3827 492</span>
                    <span class="text-white">300 Collins St. Melbourne 3000</span>
                </div>
            </div><!--end for row-->
        </div><!--end of container-->

        <div class="contact-action">
            <div class="align-vertical">
                <i class="icon text-white icon_mail"></i>
                <a href="/templates/contact" class="text-white"><span class="text-white">Get in touch with us <i class="icon arrow_right"></i></span></a>
            </div>
        </div>
    </footer>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.plugin.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/smooth-scroll.min.js"></script>
<script src="/js/skrollr.min.js"></script>
<script src="/js/spectragram.min.js"></script>
<script src="/js/scrollReveal.min.js"></script>
<script src="/js/isotope.min.js"></script>
<script src="/js/twitterFetcher_v10_min.js"></script>
<script src="/js/lightbox.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>

