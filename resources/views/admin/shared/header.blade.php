<nav class="uk-navbar uk-navbar-attached">
    <div class="uk-container uk-container-center">
        <a href="{{ url('/home')}}" class="uk-navbar-brand">REWS</a>
        <ul class="uk-navbar-nav">
            <li><a href="{{ url('/home')}}">Home</a></li>
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