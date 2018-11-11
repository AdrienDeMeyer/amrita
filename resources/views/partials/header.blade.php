<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ URL::asset('img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title') | Le Souffle De Vie</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700" rel="stylesheet">
    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="{{ URL::asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>

<body>
<!-- start header Area -->
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+880 1234 654 953">
                        <span class="text">+880 1234 654 953</span>
                    </a>
                    <a class="book-now" href="#">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ route('accueil') }}"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a class="{{ Route::currentRouteNamed('accueil') ? 'active' : '' }}" href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a class="{{ Route::currentRouteNamed('seance') ? 'active' : '' }}" href="{{ route('seance') }}">Avant la séance</a></li>
                    <li><a class="{{ Route::currentRouteNamed('benefices') ? 'active' : '' }}" href="{{ route('benefices') }}">Bénéfices</a></li>
                    <li><a class="{{ Route::currentRouteNamed('biographie') ? 'active' : '' }}" href="{{ route('biographie') }}">Biographie</a></li>
                    <li><a class="{{ Route::currentRouteNamed('tarifs') ? 'active' : '' }}" href="{{ route('tarifs') }}">Tarifs</a></li>
                    <li><a class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
<!-- end header Area -->