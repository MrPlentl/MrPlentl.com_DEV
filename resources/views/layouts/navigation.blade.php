<nav class="top-bar overlay-bar">
    <div class="container">

        <div class="row utility-menu">
            <div class="col-sm-12">
                <div class="utility-inner clearfix">
                    <span class="alt-font"><i class="icon icon_pin"></i> 300 Collins St Melbourne</span>
                    <span class="alt-font"><i class="icon icon_mail"></i> luke.skywalker@starwars.com</span>

                    <div class="pull-right">

                        @guest
                            <a href="{{ route('login') }}" class="btn btn-primary login-button btn-xs">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-filled btn-xs">Signup</a>

                            @else
                                <li class="dropdown" style="list-style: none;">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#ffffff;">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                    </div>
                </div>
            </div>
        </div><!--end of row-->

        <div class="row nav-menu">
            <div class="col-sm-3 col-md-2 columns">
                <a href="/">
                    <img class="logo logo-light" alt="Logo" src="/img/logo-light.png">
                    <img class="logo logo-dark" alt="Logo" src="/img/logo-dark.png">
                </a>
            </div>

            <div class="col-sm-9 col-md-10 columns">
                <ul class="menu">
                    <li class="has-dropdown"><a href="#">Home Pages</a>
                        <div class="subnav subnav-fullwidth">
                            <div class="col-md-3">
                                <h6 class="alt-font">Home Layouts</h6>
                                <ul class="subnav">
                                    <li><a href="/templates">Home Classic</a></li>
                                    <li><a href="/templates/home-2">Home Education</a></li>
                                    <li><a href="/templates/home-3">Home Business</a></li>
                                    <li><a href="/templates/home-4">Home Agency</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <h6 class="alt-font">Home Layouts</h6>
                                <ul class="subnav">
                                    <li><a href="/templates/home-5">Home Corporate</a></li>
                                    <li><a href="/templates/personal">Home Personal</a></li>
                                    <li><a href="/templates/launching-soon-2">Service Launch</a></li>
                                    <li><a href="/templates/launching-soon">Product Launch</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <h6 class="alt-font">Home Layouts</h6>
                                <ul class="subnav">
                                    <li><a href="/templates/home-resume">Home Resume</a></li>
                                    <li><a href="/templates/launching-soon-3">Launch with video</a></li>
                                    <li><a href="/templates/coming-soon">Launch with countdown</a></li>
                                    <li><a href="/templates/one-page">One Page</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <a class="btn btn-primary" href="#">Build your own</a>
                                <a class="btn btn-primary btn-filled" href="#">Purchase Kyber Crystals</a>
                            </div>
                        </div>
                    </li>
                    <li class="has-dropdown"><a href="#">Pages</a>
                        <ul class="subnav">
                            <li><a href="/templates/about">About Us</a></li>
                            <li><a href="/templates/about-2">About Us 2</a></li>
                            <li><a href="/templates/services">Services</a></li>
                            <li><a href="/templates/services-2">Services 2</a></li>
                            <li><a href="/templates/login">Login</a></li>
                            <li><a href="/templates/404">404 Error</a></li>
                            <li><a href="/templates/500">500 Error</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a  href="#">Blog</a>
                        <div class="subnav subnav-halfwidth">
                            <div class="col-sm-6">
                                <h6 class="alt-font">Article Lists</h6>
                                <ul class="subnav">
                                    <li><a href="/templates/blog-masonry">Masonry</a></li>
                                    <li><a href="/templates/blog-masonry-sidebar">Masonry Sidebar</a></li>
                                    <li><a href="/templates/blog">Blog Large List</a></li>
                                    <li><a href="/templates/blog-large-image">Blog Image List</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h6 class="alt-font">Article Singles</h6>
                                <ul class="subnav">
                                    <li><a href="/templates/blog-single">Article Basic</a></li>
                                    <li><a href="/templates/blog-single-2">Article Basic 2</a></li>
                                    <li><a href="/templates/blog-single-sidebar">Article Sidebar</a></li>
                                    <li><a href="/templates/blog-single-media">Article Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-dropdown"><a href="#">Projects</a>
                        <ul class="subnav">
                            <li><a href="/templates/projects">Projects Fullwidth</a></li>
                            <li><a href="/templates/projects-2">Projects Contained</a></li>
                            <li><a href="/templates/project-single-2">Project Single</a></li>
                            <li><a href="/templates/project-single">Project Single 2</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Contact</a>
                        <ul class="subnav">
                            <li><a href="/templates/contact-3">Large Map</a></li>
                            <li><a href="/templates/contact-2">Map with form</a></li>
                            <li><a href="/templates/contact">Header with form</a></li>
                            <li><a href="/templates/contact-4">Fullscreen photo</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="social-icons text-right">
                    <li>
                        <a href="#">
                            <i class="icon social_twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
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