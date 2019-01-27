<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/mostwanted') }}">
                        CDMS
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <li><a href="{{ url('news') }}">NEWS</a></li>
                      <li><a href="{{ url('mostwanted') }}">MOST WANTED</a></li>
                      <li><a href="{{ url('criminals') }}">CRIMINALS</a></li>
                      <li><a href="{{ url('whatweinvestigate') }}">WHAT WE INVESTIGATE</a></li>
                      <li><a href="{{ url('submitatip') }}">SUBMIT A TIP</a></li>
                      <li><a href="{{ url('services') }}">SERVICES</a></li>
                      <li><a href="{{ url('contactus') }}">CONTACT US</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li><a href="{{ url('addmostwanted') }}">ADD</a></li>
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ url('profile') }}">profile</a></li>
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  @if(count($errors)> 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                  @endif
                  @if(session('response'))
                  <div class="alert alert-success">
                    {{session('response')}}
                  </div>
                  @endif
                    <div class="panel panel-default">
                        <center><div class="panel-heading">MOST WANTED/MISSING PERSON/SEEKING INFORMATIONA</div></center><hr>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="col-md-8">
                                @if(count($mostwanteds)>0)
                                  @foreach($mostwanteds->all() as $mostwanted)

                                    <img src="{{ $mostwanted->mostwanted_image }}" alt="">
                                    <b><h4>{{$mostwanted->mostwanted_title}}</h4></b>
                                    <b><h4>{{$mostwanted->mostwanted_name}}</h4></b>
                                    <ul class="nav nav-pills">
                                      <li role="presentation">
                                        <a href="{{url("/news/view/{$mostwanted->id}")}}">
                                          <span>VIEW</span>
                                        </a>
                                      </li>
                                      <li role="presentation">
                                        <a href="{{url("/news/edit/{$mostwanted->id}")}}">
                                          <span>EDIT</span>
                                        </a>
                                      </li>
                                      <li role="presentation">
                                        <a href="{{url("/news/delete/{$mostwanted->id}")}}">
                                          <span>DELETE</span>
                                        </a>
                                      </li>
                                    </ul>
                                    <cite style="">Posted on: {{date( 'M j, Y H:i', strtotime($mostwanted->updated_at) )}}</cite>
                                    <hr>
                                  @endforeach
                                  @else
                                    <p>No Post Available</p>
                                @endif
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
