<header class="mdl-layout__header app-appbar">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><i class="material-icons">search</i></span>
      <nav class="mdl-navigation">
      @foreach($categories as $category)
        <a class="mdl-navigation__link" href="{{ route('category.show', $category->id)}}">{{ $category->title}}</a>
      @endforeach
        <a class="mdl-navigation__link" href=""><i class="material-icons">playlist_add</i></a>
      </nav>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <span>{{ Auth::user()->name }}</span>
            <button id="appbar-menu" class="mdl-button mdl-js-button mdl-button--icon">
              <i class="material-icons">more_vert</i>
            </button>
            <ul for="appbar-menu" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" >
              <li class="mdl-menu__item">Some Action</li>
              <li class="mdl-menu__item">Another Action</li>
              <li disabled class="mdl-menu__item">Disabled Action</li>
              <li class="mdl-menu__item"><a href="{{ url('/logout') }}"><i class="uk-icon-sign-out"></i> Logout</a></li>
            </ul>
        @endif
      </nav>
    </div>
</header>