<nav class="top-bar overlay-bar">
    <div class="container">
        <div class="row utility-menu">
            <div class="col-sm-12">
                <div class="utility-inner clearfix">
                    <span class="alt-font"><i class="icon icon_pin"></i> Rooted in <a href="https://www.google.com/maps/place/Euless,+TX/data=!4m2!3m1!1s0x864e794bbb480dff:0xcf93da011b356265?sa=X&ved=0ahUKEwjooIS87LXPAhUDziYKHYXgDCwQ8gEIgAEwCw" style="text-decoration:none;color:#fff;" target="_blank">Euless</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="alt-font"><i class="icon icon_mail"></i> <a href="mailto:bplentl@gmail.com" style="text-decoration:none;color:#fff;" target="_blank">bplentl@gmail.com</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="alt-font"><i class="icon icon_phone"></i> <a href="tel:2145468271" style="text-decoration:none;color:#fff;" target="_blank">(682) 503-9073</a></span>
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
                    <img class="logo logo-light" alt="Logo" src="/img/mrplentl-logo-light.png">
                    <img class="logo logo-dark" alt="Logo" src="/img/mrplentl-logo-dark.png">
                </a>
            </div>

            <div class="col-sm-9 col-md-10 columns">
                <ul class="menu">
                    <li class="has-dropdown"><a href="/about-brandon-plentl">About</a>
                        <ul class="subnav">
                            <li><a href="/about-brandon-plentl">Brandon Plentl</a></li>
                            <li><a href="/about-thabamboozler">ThaBamboozler</a></li>
                            <li><a href="/hope-chiropractic">Hope Chiropractic</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="/projects">Projects</a>
                        <ul class="subnav">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Gamematics</a></li>
                            <li><a href="#">Websites</a></li>
                            <li><a href="https://chrome.google.com/webstore/detail/minimalist-dark/cgkkkfadlakkgiiipeafiogaogdgfkaj" target="_blank">My Chrome Theme</a></li>
                        </ul>
                    </li>

                    <li class="has-dropdown"><a href="/favorites">Favorites</a>
                        <div class="subnav subnav-fullwidth">

                            <div class="col-md-3">
                                <h6 class="alt-font">Hobbies</h6>
                                <ul class="subnav">
                                    <li><a href="/hobbies/movies-and-tv">Movies & TV Shows</a></li>
                                    <li><a href="/hobbies/books">Books & Comics</a></li>
                                    <li><a href="/hobbies/music">Music</a></li>
                                    <li><a href="/hobbies/video-games">Video Games</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <h6 class="alt-font">Links</h6>
                                <ul class="subnav">
                                    <li><a href="/links#rss">RSS Feeds</a></li>
                                    <li><a href="/links#wp-plugins">WordPress Plugins</a></li>
                                    <li><a href="/links#ide-styles">My IDE Styles</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <h6 class="alt-font">Development Links</h6>
                                <ul class="subnav">
                                    <li><a href="/dev-links#programs">Programs</a></li>
                                    <li><a href="/dev-links#browser-ext">Browser Extensions</a></li>
                                    <li><a href="/dev-links#wamp-setup">WAMP Setup</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <h6 class="alt-font">Web Sites</h6>
                                <ul class="subnav">
                                    <li><a href="https://laravel.com/" target="_blank">Laravel.com</a></li>
                                    <li><a href="https://laracasts.com/" target="_blank">Laracasts</a></li>
                                    <li><a href="https://css-tricks.com/" target="_blank">CSS-Tricks</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="has-dropdown"><a href="#">Social</a>
                        <ul class="subnav">
                            <li><a href="https://facebook.com/MrPlentl" target="_blank">Facebook</a></li>
                            <li><a href="https://twitter.com/MrPlentl" target="_blank">Twitter</a></li>
                            <li><a href="https://youtube.com/c/thabamboozler" target="_blank">YouTube</a></li>
                            <li><a href="https://plus.google.com/+ThaBamboozler" target="_blank">Google+</a></li>
                            <li><a href="https://instagram.com/MrPlentl" target="_blank">Instagram</a></li>
                            <li><a href="https://github.com/MrPlentl" target="_blank">GitHub</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="/blog">Blog</a>
                    </li>

                    <li><a href="/contact">Contact</a></li>
                </ul>

                <ul class="social-icons text-right">
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
                </ul>
            </div>
        </div><!--end of row-->

        <div class="mobile-toggle">
            <i class="icon icon_menu"></i>
        </div>
    </div><!--end of container-->
</nav>
