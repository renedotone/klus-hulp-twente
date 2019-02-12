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

    <title>@yield('title', 'Klus Hulp Twente')</title>

  </head>
  <body>
      {{-- <h1 class="title">test</h1> --}}

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Over ons</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Spelregels</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Succesverhalen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/jobs">Openstaande klussen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/addingjobs">Voeg een klus toe</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">Mijn klusportaal</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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

    <div class="jumbotron jumbotron-fluid custom-jumbotron">
        <div class="container">
            <h1 class="display-4">KlusHulpTwente</h1>
            <p class="lead">Sociaal platform voor de persoon die thuis wel een steuntje kan gebruiken.</p>
        </div>
    </div>

  @yield('content')

<footer class="" style="background-color: #839CB5;">
    <div class="container">
        <div class="row mt-5 pt-5 pb-5">
        <div class="col-md-4 col-xl-5">
            <div class="pr-xl-4">
            <p>Dit is een site voor de persoon die wel wat hulp kan gebruiken.</p>
            <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Klus Hulp Twente</span><span>. </span><span>All Rights Reserved.</span></p>
            </div>
        </div>
        <div class="col-md-4">
            <h5>Contact</h5>
            <dl class="contact-list">
            <dt>Email:</dt>
            <dd><a href="mailto:#">KlusHulpTwente@hotmail.com</a></dd>
            </dl>
            <dl class="contact-list">
            <dt>Telefoon:</dt>
            <dd><a href="tel:#">053-477 555 555</a>
            </dd>
            </dl>
        </div>
        <div class="col-md-4 col-xl-3">
            <h5>Links</h5>
            <ul class="nav-list">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Linkedin</a></li>
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