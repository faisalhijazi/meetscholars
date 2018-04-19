<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css')}}">

</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ourNavbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/')}}">MeetScholars</a>
      </div>

      <div class="collapse navbar-collapse" id="ourNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::guest())
            <li><a href="{{ url(route('login'))}}">Login</a></li>
            <li><a href="{{ url(route('register'))}}">Register</a></li>
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>


    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend/js/app.js')}}" charset="utf-8"></script>
</body>
</html>