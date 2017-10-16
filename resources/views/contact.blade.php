@extends('layouts.master')

@section('page-title')Contact
@endsection

@section('main-content')
<section class="contact-photo">

    <div class="background-image-holder">
        <img class="background-image" alt="Background Image" src="/img/hero4.jpg">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                <h1 class="text-white" style="margin-bottom: 0">Contact Me</h1>
                <h4 style="color: white;padding-bottom: 20px;">Feel Free to Email or Send Me a Message on Social Media</h4>
            </div>
        </div><!--end of row-->

        <div class="photo-form-wrapper clearfix" style="margin-bottom: 60px;">
            <form class="email-form">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
                        <input class="form-name validate-required" type="text" placeholder="Your Name" name="name">
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <input class="form-email validate-required validate-email" type="text" placeholder="Your Email" name="email">
                    </div>
                </div><!--end of row-->

                <div class="row">
                    <div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center">
                        <input class="form-message validate-required" type="text" name="message" placeholder="Your Message">
                        <input type="submit" class="send-form btn-filled" value="Send Form">
                        <div class="form-success">
                            <span class="text-white">Message sent - Thanks for your enquiry</span>
                        </div>
                        <div class="form-error">
                            <span class="text-white">Please complete all fields correctly</span>
                        </div>
                    </div>
                </div><!--end of row-->
            </form>

        </div><!--end of photo form wrapper-->

        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                <ul class="social-icons">
                    <li>
                        <a href="https://twitter.com/MrPlentl" target="_blank">
                            <i class="icon social_twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://facebook.com/MrPlentl" target="_blank">
                            <i class="icon social_facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://instagram.com/MrPlentl" target="_blank">
                            <i class="icon social_instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://plus.google.com/+ThaBamboozler" target="_blank">
                            <i class="icon social_googleplus"></i>
                        </a>
                    </li>
                </ul><br>
                <span class="sub">© Copright 2017 - <a href="http://mrplentl.com">MrPlentl.com</a> - This Copyright isn't legal</span>
            </div>
        </div><!--end of row-->

    </div><!--end of container-->

</section>
@endsection