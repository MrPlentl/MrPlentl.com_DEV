<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>@yield('page-title') | {{ env('APP_NAME') }}</title>
    @include('layouts.head-std')

    @yield('head')
</head>
<body>

<div class="loader">
    @include('layouts.pageloader')
</div>

<div class="nav-container">
    @if(env('APP_DEV_MODE'))
        @include('laracasts.navigation')
    @else
        @include('layouts.navigation')
    @endif
</div>

<div class="main-container">
    @yield('main-content')
</div>

<div class="footer-container">
    @include('layouts.footer')
</div>

@include('layouts.footer-js')
@yield('footer-js')

</body>
</html>