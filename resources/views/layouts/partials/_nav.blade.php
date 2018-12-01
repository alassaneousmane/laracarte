<div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container">
        <a href="../" class="navbar-brand">Laracarte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">          
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="active nav-link" href="{{ route('about') }}">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="hhttp://laracarte.herokuapp.com/artisans">Artisans</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Planet <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
               {{--  <a class="dropdown-item" href="https://jsfiddle.net/bootswatch/3he50zsf/">Larave</a> --}}
                {{-- <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" href="//laravel.com">Laravel.com</a>
                <a class="dropdown-item" href="//laravel.io">Laravel.io</a>
                {{-- <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" href="//laracasts.com">Laracasts</a>
                <a class="dropdown-item" href="//larajobs.com">Larajobs</a>
                <a class="dropdown-item" href=".
                //laravel-news.com">Laravel News</a>
                <a class="dropdown-item" href="//larachat.co">Larachat</a>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="http://laracarte.herokuapp.com/contact">Contact</a>
            </li>
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://laracarte.herokuapp.com/auth/login" target="_blank">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://laracarte.herokuapp.com/auth/register" target="_blank">Register</a>
            </li>
          </ul>

        </div>
      </div>
    </div>