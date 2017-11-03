<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/lato-webfont.css')}}" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{route('news.greetings')}}"><img src="assets/images/logo.png" alt="" /></a>
                </div>
@if(strpos($_SERVER['REQUEST_URI'],'news'))
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ route('news.greetings')}}">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                       <!--  <li><a href="#video">Video</a></li>
                        <li><a href="#price">Prices</a></li> -->
                        <li><a href="#testimonial">Testimonials</a></li>
                        <li><a href="#download">Start Now</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="{{route('news.memory')}}">To My Article</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>   
@else
               <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ route('news.greetings')}}">Home</a></li>
                        <li><a href="{{route('news.memory')}}">To My Article</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>   
@endif        
@if(!strpos($_SERVER['REQUEST_URI'],'news'))
           <!--Home page style-->
        <header id="home" class="home">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12">
                        <div class="home-content sections">

                            @yield('cont')
                            

                           

        </header>
@endif
<?php

   // @yield('video')

   // @yield('price') 

?>
        @yield('header')  

        @yield('info')

        @yield('galary')

        @yield('description')

        @yield('question')
        
        @yield('map')

   


        <!--Footer-->
        <footer id="footer" class="footer colorsbg">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright text-left">
                            <!-- <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p> -->
                            Ukraine Kiev 2017
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright text-right">
                            <p>CMSConvert convertinformation from your cms</p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="{{asset('assets/js/gmaps.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
