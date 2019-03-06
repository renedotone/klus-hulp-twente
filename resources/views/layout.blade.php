<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- My own CSS -->
    <link href="{{ asset('css/layoutstyle.css') }}" rel="stylesheet" type="text/css" >

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- TableSorter Javascript Library -->

    @section('stylesheets')
        <link href="{{ asset('css/layoutstyle.css') }}" rel="stylesheet" type="text/css" >
    @show

    <title>@yield('title', 'Klus Hulp Twente')</title>
    <link rel="icon" href="img/layout/klshlp3zw.png">

  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg custom-navbar-1">
            <a class="navbar-brand custom-navbar-brand-text" href="/">
                <img src="../img/layout/klshlp6_ruw.png" width =50px height=50px alt="">
                Klus Hulp Twente
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link custom-navbar-link-text" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link custom-navbar-link-text" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg custom-navbar-2">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link custom-navbar-link-text" href="/rules">Hoe werkt het?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-navbar-link-text" href="/addingjobs">Klus toevoegen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-navbar-link-text" href="/userblogposts">Succesverhalen</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link custom-navbar-link-text" href="/jobs">Openstaande klussen</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-navbar-link-text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tools
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://poolconfigurator.herokuapp.com" target="_blank">Zwembad configurator</a>
                            {{-- <div class="dropdown-divider"></div> --}}
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-navbar-link-text" href="/about">Over ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-navbar-link-text" href="/dashboard">Mijn klusportaal</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



  @yield('content')

<footer class="custom-footer spacer200top">
    <div class="container">
        <div class="row mt-5 pt-5 pb-5">
        <div class="col-md-4 col-xl-5">
            <div class="pr-xl-4">
            <p>Iedereen kan wel wat hulp gebruiken.</p>
            <p class="custom-footer-text"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Klus Hulp Twente</span><span>. </span><span>All Rights Reserved.</span></p>
            <a class="nav-link custom-footer-text" href="/admin/login">ADMIN LOGIN</a>
            <a class="nav-link custom-footer-text" href="/admin">ADMIN PORTAL</a>
            </div>
        </div>
        <div class="col-md-4">
            <h5>Contact</h5>
            <dl class="custom-footer-text">
            <dt>Email:</dt>
            <dd><a class="custom-footer-text" href="mailto:#">KlusHulpTwente@hotmail.com</a></dd>
            </dl>
            <dl class="custom-footer-text">
            <dt>Telefoon:</dt>
            <dd>053-477 555 555
            </dd>
            </dl>
        </div>
        <div class="col-md-4 col-xl-3">
            <h5>Links</h5>
            <ul class="nav-list">
            <li><a class="custom-footer-text" href="#">Facebook</a></li>
            <li><a class="custom-footer-text" href="#">Instagram</a></li>
            <li><a class="custom-footer-text" href="#">Twitter</a></li>
            <li><a class="custom-footer-text" href="#">Linkedin</a></li>
            </ul>
        </div>
        </div>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </body>
