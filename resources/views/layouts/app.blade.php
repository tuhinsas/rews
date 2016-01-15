<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REWS - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="wrapper-home">
    <div id="left-sidebar">
        <div class="uk-flex uk-flex-center uk-flex-space-between uk-flex-column uk-height-1-1">
            <div>
                <h1 class="text-white text-thin"><i class="uk-icon-newspaper-o"></i> <span class="uk-text-bold">R</span>EWS</h1>
            </div>
            <div>
                <ul id="right-sidebar-nav">
                    <li><a href="#"><i class="uk-icon-bolt"></i> Recent</a></li>
                    <li><a href="#"><i class="uk-icon-fire"></i> Rocemmended</a></li>
                    <li><a href="#"><i class="uk-icon-thumb-tack"></i> Pinned</a></li>
                    <li><a href="#"><i class="uk-icon-heartbeat"></i> Favourites</a></li>
                    <li><a href="#"><i class="uk-icon-user-secret"></i> People</a></li>
                </ul>
            </div>
            <div>
                <a href="#">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div>   
                            <img src="{{ url('thumbs/avatar.png')}}" alt="avatar" class="uk-border-circle" width="42px">
                        </div>
                        <div>Fahim Shahriyer</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="right-sidebar">
        
    </div>
    <nav class="uk-navbar uk-navbar-attached">
        <div class="uk-container uk-container-center">
            <a href="{{ url('/home')}}" class="uk-navbar-brand">REWS</a>
            <ul class="uk-navbar-nav">
                <li><a href="{{ url('/home')}}">Home</a></li>
                <li><a href="{{ url('/profile')}}">Profile</a></li>
            </ul>
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="uk-parent" data-uk-dropdown="{mode:'click'}">
                            <a href="#">{{ Auth::user()->name }} <i class="uk-icon-caret-down"></i></a>
                            <div class="uk-dropdown uk-dropdown-navbar">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="#"><i class="uk-icon-cog"></i> Settings</a></li>
                                    <li><a href="#"><i class="uk-icon-info"></i> Help</a></li>
                                    <hr class="uk-nav-divider">
                                    <li><a href="{{ url('/logout') }}"><i class="uk-icon-sign-out"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="uk-container uk-container-center uk-margin-large-top">
        @yield('content')
    </div>
    <script src="/js/main.js"></script>
</body>
</html>
