<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <div class="container">
    <a href="#" class="navbar-brand">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">          
        <li class="{{ set_active_route('home') }} nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class=" {{ set_active_route('about') }} nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
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
       <li class=" {{ set_active_route('contact') }} nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact ({{number_of_messages()}})</a>
      </li>
    </ul>

    <!-- Right Side Of Navbar -->
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
</div>
</div>