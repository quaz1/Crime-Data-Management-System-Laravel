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
                    <a class="navbar-brand" href="{{ url('/home') }}">
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
                        <li><a href="{{ url('submitatip/view/{id}') }}">VIEW</a></li>
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
            <div class="panel panel-default">
                <center><div class="panel-heading">SUBMIT A TIP</div></center><hr>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('/addingsubmitatip') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('submitatip_title') ? ' has-error' : '' }}">
                            <label for="submitatip_title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="submitatip_title" type="text" class="form-control" name="submitatip_title" value="{{ old('submitatip_title') }}" required autofocus>

                                @if ($errors->has('submitatip_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('submitatip_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('submitatip_body') ? ' has-error' : '' }}">
                            <label for="submitatip_body" class="col-md-4 control-label">Details</label>

                            <div class="col-md-6">
                                <textarea id="submitatip_body" type="text" rows="7" class="form-control" name="submitatip_body" value="{{ old('submitatip_body') }}" required autofocus></textarea>

                                @if ($errors->has('submitatip_body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('submitatip_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    SUBMIT TIP
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
